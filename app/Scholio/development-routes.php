<?php
//ONLY FOR DEVELOPMENT

Route::get('/out', function () {
    auth()->logout();
    return redirect('/');
});

Route::get('in/{data}', function ($data) {
    if (auth()->check()) {
        auth()->logout();
    }
    if (is_numeric($data)) {
        auth()->loginUsingId($data);
    } else {
        if ($data == "κολεγειο" || $data == "college" || $data == "act" || $data == "anatolia") {
            auth()->loginUsingId(1);
        }
        if ($data == "iek" || $data == "ιεκ" || $data == "akmi" || $data == "ακμη") {
            auth()->loginUsingId(3);
        }
        if ($data == "fr" || $data == "frontistirio" || $data == "φροντηστηριο") {
            auth()->loginUsingId(7);
        }
        if ($data == "ιδιωτικο" || $data == "idiotiko" || $data == "sxoleio" || $data == "σχολειο") {
            auth()->loginUsingId(11);
        }
        if ($data == "χορος" || $data == "xoros" || $data == "danza" || $data == "dance") {
            auth()->loginUsingId(10);
        }
        if ($data == "metropolitan" || $data == "amc") {
            auth()->loginUsingId(2);
        }
        if ($data == "pavlos" || $data == "παυλος") {
            auth()->loginUsingId(8);
        }
        if ($data == 'st') {
            auth()->loginUsingId(21);
        }

    }
    return back();
});
