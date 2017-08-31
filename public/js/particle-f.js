// Tamino Martinius - All rights reserved

// Copyright © 2013 Tamino Martinius (http://zaku.eu)
// Copyright © 2013 Particleslider.com (http://particleslider.com

// Terms of usage: http://particleslider.com/legal/license

var init = function(){
  var isMobile = navigator.userAgent &&
    navigator.userAgent.toLowerCase().indexOf('mobile') >= 0;
  
  var ps = new ParticleSlider({
    ptlGap: isMobile ? 3 : 0,
    ptlSize: isMobile ? 3 : 1,
    width: 1e9,
    height: 1e9,
    ptlGap: 2,
    ptlSize: 3
  });
  
  (window.addEventListener
   ? window.addEventListener('click', function(){ps.init(true)}, false)
   : window.onclick = function(){ps.init(true)});
}

var initParticleSlider = function(){
  var psScript = document.createElement('script');
  (psScript.addEventListener
    ? psScript.addEventListener('load', init, false)
    : psScript.onload = init);
  psScript.src = 'http://particleslider.com/js/particleslider/current/particleslider.js';
	psScript.setAttribute('type', 'text/javascript');
  document.body.appendChild(psScript);
}
    
(window.addEventListener ? window.addEventListener('load', initParticleSlider, false) : window.onload = initParticleSlider);
