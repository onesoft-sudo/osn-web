<?php

function classNames(...$classes): string {
    return implode(' ', array_filter($classes));
}
