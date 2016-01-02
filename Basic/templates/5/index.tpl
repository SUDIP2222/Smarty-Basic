
    {* display value of page from URL ($_GET) http://www.example.com/index.php?page=foo {$smarty.get.page}
    {* display the variable "page" from a form ($_POST['page']) *}
    {$smarty.post.page}
    {* display the value of the cookie "username" ($_COOKIE['username']) *}
    {$smarty.cookies.username}
    {* display the server variable "SERVER_NAME" ($_SERVER['SERVER_NAME'])*}
    {$smarty.server.SERVER_NAME}
    {* display the system environment variable "PATH" *}
    {$smarty.env.PATH}
    {* display the php session variable "id" ($_SESSION['id']) *}
    {$smarty.session.id}
    {* display the variable "username" from merged get/post/cookies/server/env *}
    {$smarty.request.username}

    <a href="{$SCRIPT_NAME}?page=smarty">click me</a>
    <a href="{$smarty.server.SCRIPT_NAME}?page=smarty">click me</a>

    <div id="footer">Powered by Smarty {$smarty.version}</div>

