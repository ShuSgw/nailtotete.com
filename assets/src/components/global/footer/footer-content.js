const HeaderSpace = () =>
{
    // ヘッダーの高さ取得してメインコンテンツに渡す（スティックヘッダーなので）
    const $hSize = $(window).height();
    const $headerHeight = $('header').outerHeight();
    $(".main_contents").css("margin-top", $headerHeight);
}


export { HeaderSpace }
