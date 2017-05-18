<?php

function display_filters($current_department_id, $all_departments)
{
    $options = '';

    $option_template = '<option value="%s"%s>%s</option>';

    foreach ($all_departments as $dept) {
        $is_current_department = ($current_department_id === $dept->id) ? ' selected="selected"' : '';
        $options .= sprintf($option_template, $dept->id, $is_current_department, $dept->name);
    }

    return $options;
}

function guard_minimum_number($number)
{
    // If the number is less than 1 but more than 0...
    if ($number < 1 && $number > 0) {
        return 0.5;
    } else {
        return $number;
    }
}

function calculate_percentage($number, $total)
{
    if ($total < 1) {
        return '0';
    }

    $percentage = ($number / $total) * 100;

    if ($percentage <= 0) {
        return '0';
    }

    if ($percentage > 100) {
        return '100';
    }

    if ($percentage < 1) {
        $percentage_formatted = round($percentage, 2);
        return $percentage_formatted;
    } else {
        return floor($percentage);
    }
}

function percent_of_total($number, $total)
{
    $percentage = calculate_percentage($number, $total);

    return (float)$percentage;
}