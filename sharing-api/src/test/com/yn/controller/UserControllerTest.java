package com.yn.controller;

import java.util.Date;

import org.junit.Before;
import org.junit.Test;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.MediaType;
import org.springframework.test.web.servlet.MockMvc;
import org.springframework.test.web.servlet.MvcResult;
import org.springframework.test.web.servlet.setup.MockMvcBuilders;
import org.springframework.web.context.WebApplicationContext;

import com.alibaba.fastjson.JSONObject;
import com.yn.SharingApiApplicationTests;
import com.yn.entity.User;

import static org.springframework.test.web.servlet.request.MockMvcRequestBuilders.*;
import static org.springframework.test.web.servlet.result.MockMvcResultMatchers.content;
import static org.springframework.test.web.servlet.result.MockMvcResultMatchers.status;

public class UserControllerTest extends SharingApiApplicationTests {

    private MockMvc mockMvc; // 模拟MVC对象，通过MockMvcBuilders.webAppContextSetup(this.wac).build()初始化。    

    @Autowired
    private WebApplicationContext wac; // 注入WebApplicationContext    

    @Before
    public void setup() {
        this.mockMvc = MockMvcBuilders.webAppContextSetup(this.wac).build();
    }

    @Test
    public void saveUserTest() throws Exception {
        User u = new User();
        u.setAccount("yn");
        u.setNickname("test");
        u.setPassword("123456");
        u.setAdmin(true);
        u.setCreateDate(new Date());
        u.setEmail("919431514@qq.com");
        u.setMobilePhoneNumber("18396816462");

        MvcResult result = mockMvc.perform(post("/users/create").contentType(MediaType.APPLICATION_JSON).content(JSONObject.toJSONString(u)))
                .andExpect(status().isOk())// 模拟向testRest发送get请求    
                .andExpect(content().contentType(MediaType.APPLICATION_JSON_UTF8))// 预期返回值的媒体类型text/plain;charset=UTF-8    
                .andReturn();// 返回执行请求的结果

        System.out.println(result.getResponse().getContentAsString());

    }

    @Test
    public void getUserById() throws Exception {
        Long id = 5L;
        MvcResult result = mockMvc.perform(get("/users/" + id))
                .andExpect(status().isOk())
                .andExpect(content().contentType(MediaType.APPLICATION_JSON_UTF8))
                .andReturn();

        System.out.println(result.getResponse().getContentAsString());
    }

    @Test
    public void findAllTest() throws Exception {
        MvcResult result = mockMvc.perform(get("/users/"))
                .andExpect(status().isOk())
                .andExpect(content().contentType(MediaType.APPLICATION_JSON_UTF8))
                .andReturn();

        System.out.println(result.getResponse().getContentAsString());
    }

    @Test
    public void updateUserTest() throws Exception {
        User u = new User();
        Integer id = 5;
        u.setId(id);
        u.setNickname("yn222");
        MvcResult result = mockMvc.perform(post("/users/update").contentType(MediaType.APPLICATION_JSON).content(JSONObject.toJSONString(u)))
                .andExpect(status().isOk())
                .andExpect(content().contentType(MediaType.APPLICATION_JSON_UTF8))
                .andReturn();

        System.out.println(result.getResponse().getContentAsString());
    }

    @Test
    public void deleteTest() throws Exception {
        Long id = 5L;
        MvcResult result = mockMvc.perform(get("/users/delete/" + id))
                .andExpect(status().isOk())
                .andExpect(content().contentType(MediaType.APPLICATION_JSON_UTF8))
                .andReturn();

        System.out.println(result.getResponse().getContentAsString());

    }

}
