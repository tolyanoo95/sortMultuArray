<?php
  /* Двумерный массив с пользователями (например, из БД) */
  $array = array();
  $array[5] = array("email" => "abc1@mail.ru", "date_reg" => 1272895531);
  $array[10] = array("email" => "abc2@mail.ru", "date_reg" => 1274429353);
  $array[3] = array("email" => "abc3@mail.ru", "date_reg" => 1274277050);
  usort($array, "compare"); // Вызываем пользовательскую сортировку
  /* Функция для нашей сортировки */
  function compare ($v1, $v2) {
    /* Сравниваем значение по ключу date_reg */
    if ($v1["date_reg"] == $v2["date_reg"]) return 0;
    return ($v1["date_reg"] < $v2["date_reg"])? -1: 1;
  }
  print_r($array); // Выводим отсортированный массив
?>