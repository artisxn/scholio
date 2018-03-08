<script>
    window.lang = <?php
    function rsearch($folder, $pattern) {
        $dir = new RecursiveDirectoryIterator($folder);
        $ite = new RecursiveIteratorIterator($dir);
        $files = new RegexIterator($ite, $pattern, RegexIterator:: GET_MATCH);
        $fileList = array();
        foreach($files as $file) {
            $fileList = array_merge($fileList, $file);
        }
        return $fileList;
    }

    $files = rsearch(resource_path(). '/lang/'.App::getLocale(). '/', '#^(?:[A-Z]:)?(?:/(?!\.Trash)[^/]+)+/[^/]+\.(?:php)$#Di');
    $trans = [];
    $txt = [];
    $test = [];
    foreach($files as $t) {
        $dirname = explode(resource_path(). '/lang/'.App::getLocale(), pathinfo($t)['dirname']);
        $filename = pathinfo($t)['filename'];
        if ($dirname[1] == '') {
            $trans[$filename] = trans($dirname[1]. '/'.$filename);
        } else {
            $directory = substr($dirname[1], 1, strlen($dirname[1]));
            $trans[$directory][$filename] = trans($directory. '/'.$filename);
            // $trans[$directory . '.' . $filename] = trans($directory . '/' . $filename);
        }

    }

    echo json_encode($trans);
    ?>
</script>