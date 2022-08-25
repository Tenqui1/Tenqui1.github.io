package com.yn.controller;

import javax.servlet.http.HttpServletRequest;

import com.yn.common.annotation.LogAnnotation;
import org.apache.shiro.SecurityUtils;
import org.apache.shiro.authc.AuthenticationException;
import org.apache.shiro.authc.LockedAccountException;
import org.apache.shiro.authc.UnknownAccountException;
import org.apache.shiro.authc.UsernamePasswordToken;
import org.apache.shiro.subject.Subject;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import com.yn.common.constant.Base;
import com.yn.common.constant.ResultCode;
import com.yn.common.result.Result;
import com.yn.entity.User;
import com.yn.oauth.OAuthSessionManager;
import com.yn.service.UserService;

/**
 * 登录
 *
 * @author yn
 * <p>
 * 2018年1月23日
 */
@RestController
public class LoginController {

    @Autowired
    private UserService userService;

    @PostMapping("/login")
    @LogAnnotation(module = "登录", operation = "登录")
    public Result login(@RequestBody User user) {
        Result r = new Result();
        executeLogin(user.getAccount(), user.getPassword(), r);
        return r;
    }

    @PostMapping("/register")
    //@RequiresRoles(Base.ROLE_ADMIN)
    @LogAnnotation(module = "注册", operation = "注册")
    public Result register(@RequestBody User user) {

        Result r = new Result();

        int i = userService.exitUser(user.getAccount());
        if (i > 0) {
            r.setResultCode(ResultCode.USER_HAS_EXISTED);
            return r;
        }

        String account = user.getAccount();
        String password = user.getPassword();

        int userId = userService.saveUser(user);

        if (userId > 0) {
            executeLogin(account, password, r);
        } else {
            r.setResultCode(ResultCode.USER_Register_ERROR);
        }
        return r;
    }


    private void executeLogin(String account, String password, Result r) {
        if (userService.isLimitIP()) {
            r.setResultCode(ResultCode.USER_IP_ERROR);
            return;
        }
        Subject subject = SecurityUtils.getSubject();
        UsernamePasswordToken token = new UsernamePasswordToken(account, password);
        try {
            subject.login(token);

            User currentUser = userService.getUserByAccount(account);
            subject.getSession().setAttribute(Base.CURRENT_USER, currentUser);
            //TODO加登录IP和登录时间
            r.setResultCode(ResultCode.SUCCESS);
            r.simple().put(OAuthSessionManager.OAUTH_TOKEN, subject.getSession().getId());
        } catch (UnknownAccountException e) {
            r.setResultCode(ResultCode.USER_NOT_EXIST);
        } catch (LockedAccountException e) {
            r.setResultCode(ResultCode.USER_ACCOUNT_FORBIDDEN);
        } catch (AuthenticationException e) {
            r.setResultCode(ResultCode.USER_LOGIN_ERROR);
        } catch (Exception e) {
            r.setResultCode(ResultCode.ERROR);
        }

    }

    @RequestMapping(value = "/handleLogin")
    public Result handleLogin(HttpServletRequest request) {
        String id = request.getHeader(OAuthSessionManager.OAUTH_TOKEN);
//        System.out.println("超时登录。。。:" + id);
        return Result.error(ResultCode.SESSION_TIME_OUT);
    }


    @GetMapping("/logout")
    @LogAnnotation(module = "退出", operation = "退出")
    public Result logout() {
        Result r = new Result();
        Subject subject = SecurityUtils.getSubject();
        subject.logout();
        r.setResultCode(ResultCode.SUCCESS);
        return r;
    }
}
