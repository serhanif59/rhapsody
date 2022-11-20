<?php

namespace App\project;


abstract class Generator
{
    public function generate(string $name, string $fileGenerator, array $attributes): bool
    {
        $file = GEN_DIR . "/" . $fileGenerator . ".gen";
        $fr = fopen($file, "r");
        $text = fread($fr, filesize($file));
        if ($text) {
            foreach ($attributes as $key => $val)
                $text = str_replace("@$key", "'" . $val . "'", $text);
            echo $text;
            $text = "<?php\n" . $text;
            $file = DIST_DIR . "/" . $name;
            $fw = fopen($file, "w");
            fwrite($fw, $text);
            fclose($fw);
        }
        fclose($fr);
        return false;
    }
}
