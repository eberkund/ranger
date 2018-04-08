<?php

/**
 * @param $input
 * @throws \InvalidArgumentException
 * @return array
 */
function get_range($input)
{
    $output = explode(',', $input);
    $regex = '/(\d+)(?:-(?=\d)(\d+))?$/';

    $output = array_map(function ($item) use ($regex) {
        if (!preg_match($regex, $item, $matches)) {
            throw new \InvalidArgumentException();
        }
        $matches = array_filter($matches);

        if (count($matches) === 3) {
            return range($matches[1], $matches[2]);
        }

        return $matches[1];
    }, $output);

    return array_map('intval', array_flatten($output));
}
