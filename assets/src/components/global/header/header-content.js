const HeaderSpace = () => {
  // ヘッダーの高さ取得してメインコンテンツに渡す（スティックヘッダーなので）
  var w = $(window).width()
  var x = 1200
  // if (!$('.front_hero').length || w < x) {
  const $headerHeight = $('header').outerHeight()
  $('.main_contents').css('margin-top', $headerHeight)
  // }
}

export { HeaderSpace }
