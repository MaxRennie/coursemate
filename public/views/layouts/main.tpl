<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/a832d2a005.js" crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-V0WQDTCJ16"></script>
    {literal}
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {dataLayer.push(arguments);} 
            gtag('js', new Date());

            gtag('config', 'G-V0WQDTCJ16');
        </script>
    {/literal}
    <title>CourseMate</title>

</head>

{include file='views/components/header.tpl'}
<main>
    {block name="body"}{/block}
</main>
{include file='views/components/footer.tpl'}