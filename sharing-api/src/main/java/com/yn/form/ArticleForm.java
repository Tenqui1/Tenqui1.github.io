package com.yn.form;

import com.yn.common.constant.StaticValue;
import lombok.Data;

@Data
public class ArticleForm {

    private String orderBy = StaticValue.create_date;

    private Integer tagId;

    private Integer categoryId;

    private Integer year;

    private Integer month;

    private Integer count;

}
