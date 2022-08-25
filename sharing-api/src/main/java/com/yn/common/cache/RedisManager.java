package com.yn.common.cache;

import java.util.concurrent.TimeUnit;

import org.slf4j.Logger;
import org.slf4j.LoggerFactory;
import org.springframework.data.redis.core.RedisTemplate;
import org.springframework.data.redis.core.ValueOperations;

/**
 * RedisManager
 *
 * @author yn
 * <p>
 * 2018年1月23日
 */
public class RedisManager {

    private static final Logger logger = LoggerFactory.getLogger(RedisManager.class);
    /**
     * 默认过期时长，单位：秒 30分钟
     */
    public final static long DEFAULT_EXPIRE = 60 * 30;
    /**
     * 不设置过期时长
     */
    public final static long NOT_EXPIRE = -1;

    private RedisTemplate redisTemplate;


    public void set(String key, Object value, long expire) {
        try {
            if (expire == NOT_EXPIRE) {
                redisTemplate.opsForValue().set(key, value);
            } else {
                redisTemplate.opsForValue().set(key, value, expire, TimeUnit.SECONDS);
            }
        } catch (Exception e) {
            logger.error(e.getMessage());
        }

    }

    public void set(String key, Object value) {
        set(key, value, DEFAULT_EXPIRE);
    }

    public <T> T get(String key, Class<T> clazz) {
        ValueOperations<String, T> operations = redisTemplate.opsForValue();
        return operations.get(key);

    }

    public Object get(String key) {
        return redisTemplate.opsForValue().get(key);
    }

    public void delete(String key) {
        redisTemplate.delete(key);
    }

    public RedisTemplate<String, Object> getRedisTemplate() {
        return redisTemplate;
    }

    public void setRedisTemplate(RedisTemplate<String, Object> redisTemplate) {
        this.redisTemplate = redisTemplate;
    }

}
