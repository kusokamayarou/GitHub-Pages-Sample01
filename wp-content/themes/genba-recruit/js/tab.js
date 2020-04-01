( function( $ ) {
	//クリックしたときのファンクションをまとめて指定
	$('.tab-btn .tab-btn-item').click(function() {

		//.index()を使いクリックされたタブが何番目かを調べ、
		//indexという変数に代入します。
		var index = $('.tab-btn .tab-btn-item').index(this);

		//コンテンツを一度すべて非表示にし、
		$('.tab-content .tab-content-item').css('display','none');

		//クリックされたタブと同じ順番のコンテンツを表示します。
		$('.tab-content .tab-content-item').eq(index).css('display','block');

		//一度タブについているクラスselectを消し、
		$('.tab-btn .tab-btn-item').removeClass('select');

		//クリックされたタブのみにクラスselectをつけます。
		$(this).addClass('select')
	});
} )( jQuery );
