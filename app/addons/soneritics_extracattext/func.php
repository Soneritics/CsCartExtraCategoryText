<?php
/*
 * The MIT License
 *
 * Copyright 2018 Jordi Jolink.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
if (!defined('BOOTSTRAP')) { die('Access denied'); }

/**
 * Get the text for a specific category
 * @param int $categoryId
 * @param string $langCode
 * @return string
 */
function fn_soneritics_extracattext_get_text($categoryId, string $langCode = CART_LANGUAGE): string
{
    return db_get_field(
        "SELECT `text` FROM ?:soneritics_extracattext WHERE category_id = ?i AND lang_code = ?s",
        $categoryId,
        $langCode
    );
}

/**
 * Check if a text has been set for a category
 * @param int $categoryId
 * @param string $langCode
 * @return string
 */
function fn_soneritics_extracattext_has_text($categoryId, string $langCode = CART_LANGUAGE): string
{
    return (int)db_get_field(
        "SELECT COUNT($categoryId) FROM ?:soneritics_extracattext WHERE category_id = ?i AND lang_code = ?s",
        $categoryId,
        $langCode
    ) > 0;
}
