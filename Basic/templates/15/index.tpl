
    {* replace each carriage return, tab and new line with a space *}

    {$articleTitle}
    {$articleTitle|regex_replace:"/[\r\t\n]/":" "}