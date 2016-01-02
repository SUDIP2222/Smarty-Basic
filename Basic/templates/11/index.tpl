{$articleTitle}
'Stiff Opposition Expected to Casketless Funeral Plan'
{$articleTitle|escape}
&#039;Stiff Opposition Expected to Casketless Funeral Plan&#039;
{$articleTitle|escape:'html'} {* escapes & " ' < > *}
&#039;Stiff Opposition Expected to Casketless Funeral Plan&#039;
{$articleTitle|escape:'htmlall'} {* escapes ALL html entities *}
&#039;Stiff Opposition Expected to Casketless Funeral Plan&#039;
<a href="?title={$articleTitle|escape:'url'}">click here</a>
<a
        href="?title=%27Stiff%20Opposition%20Expected%20to%20Casketless%20Funeral%20Plan%27">{$articleTitle|escape:'quotes'}
    \'Stiff Opposition Expected to Casketless Funeral Plan\'
    <a href="mailto:{$EmailAddress|escape:"hex"}">{$EmailAddress|escape:"hexentity"}</a>
    {$EmailAddress|escape:'mail'} {* this converts to email to text *}
    <a href="mailto:%62%6f%..snip..%65%74">&#x62;&#x6f;&#x62..snip..&#x65;&#x74;</a>
    {'mail@example.com'|escape:'mail'}
    smarty [AT] example [DOT] com