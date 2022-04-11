function CountX(){
	window.CountXs = [];
	count_els = document.querySelectorAll('[data-func=counter]');
	count_els.forEach(function(count_el){
		$from = count_el.getAttribute('data-from') || 0;
		$to = count_el.getAttribute('data-to') || 100;
		$step = count_el.getAttribute('data-step') || 1;
		CountXs.push({
			from: parseFloat($from),
			to: parseFloat($to),
			step: parseFloat($step),
			el: count_el
		});
	});

	setInterval(function(){
		for(x=0;x<CountXs.length;x++){
			count = CountXs[x].from + CountXs[x].step;
			if( count>CountXs[x].to ){
				continue;
			}
			CountXs[x].el.innerHTML = Math.round(count);
			CountXs[x].from = count;
		}
	}, 50);
}

CountX();