package com.yn.service;

import java.util.List;

import com.yn.entity.User;

/**
 * @author yn
 * <p>
 * 2018年1月23日
 */
public interface UserService {

    List<User> findAll();

    User getUserByAccount(String account);

    User getUserById(Long id);

    int saveUser(User user);

    int updateUser(User user);

    void deleteUserById(Long id);

    int exitUser(String account);

    void updateLoginInfo(Integer id, String ip);

    boolean isLimitIP();
}
