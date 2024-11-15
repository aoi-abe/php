<?php
function calculateTrianglearea($vertical,$width)
{
    return ($vertical * $width) /2;
}
echo calculateTrianglearea(10,20);

function calculateQuadrangleArea($vertical,$width)
{
    return $vertical * $width;
}
echo calculateQuadrangleArea(10,20);

function calculateTrapezoidArea($upperbase,$bottom,$height)
{
    return ($upperbase + $bottom) * $height /2;
}
echo calculateTrapezoidArea(6,10,8);

