<?php
function calculator(string $primer): int
{
    $massivOshibok = ["?", ".", "/0"];
    foreach ($massivOshibok as $oshibki) {
        $printOshibki = strpos($primer, $oshibki);
        if ($printOshibki !== false) {
            echo "error ";
        }
    }
    return eval("return $primer;");
}

echo calculator('1+1');
