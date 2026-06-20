(function(){
  var hd=document.getElementById('hd');
  addEventListener('scroll',function(){hd.classList.toggle('scrolled',scrollY>10)},{passive:true});

  var burger=document.getElementById('burger'),menu=document.getElementById('menu'),ov=document.getElementById('ov'),menuClose=document.getElementById('menuClose');
  function close(){menu.classList.remove('open');ov.classList.remove('open');document.body.style.overflow=''}
  function open(){menu.classList.add('open');ov.classList.add('open');document.body.style.overflow='hidden'}
  burger.addEventListener('click',open);
  if(menuClose)menuClose.addEventListener('click',close);
  ov.addEventListener('click',close);
  menu.querySelectorAll('a').forEach(function(a){a.addEventListener('click',close)});
  addEventListener('keydown',function(e){if(e.key==='Escape')close()});

  var mdd=document.getElementById('mdd');
  mdd.querySelector('span').addEventListener('click',function(e){if(innerWidth<=1000){e.preventDefault();mdd.classList.toggle('open')}});

  // reveal on scroll
  var io=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}})},{threshold:.12});
  document.querySelectorAll('.reveal').forEach(function(el){io.observe(el)});

  // counters
  function run(el){
    var t=+el.dataset.c,dec=el.dataset.dec!=null,target=dec?(t+(+el.dataset.dec)/10):t,st=null,dur=1500;
    function tick(ts){if(!st)st=ts;var p=Math.min((ts-st)/dur,1),e=1-Math.pow(1-p,3),v=e*target;
      el.textContent=dec?v.toFixed(1):Math.floor(v).toLocaleString();
      if(p<1)requestAnimationFrame(tick);else{el.textContent=dec?target.toFixed(1):t.toLocaleString();}}
    requestAnimationFrame(tick);
  }
  var sio=new IntersectionObserver(function(es){es.forEach(function(e){if(e.isIntersecting){e.target.querySelectorAll('[data-c]').forEach(run);sio.unobserve(e.target)}})},{threshold:.4});
  var stats=document.getElementById('stats');if(stats)sio.observe(stats);

  // booking form -> compose WhatsApp message
  var bookBtn=document.getElementById('bookBtn');
  if(bookBtn)bookBtn.addEventListener('click',function(){
    var val=function(id){var e=document.getElementById(id);return e?e.value.trim():''};
    var name=val('bf-name'),phone=val('bf-phone'),area=val('bf-area'),svc=val('bf-service'),msg=val('bf-msg');
    var t='Hi Aiqon Quick Cool, I would like to book a service.';
    if(name)t+='\nName: '+name;
    if(phone)t+='\nPhone: '+phone;
    if(area)t+='\nArea: '+area;
    if(svc)t+='\nService: '+svc;
    if(msg)t+='\nDetails: '+msg;
    window.open('https://wa.me/60123456789?text='+encodeURIComponent(t),'_blank');
  });
})();

(function(){
  var track=document.getElementById('revTrack');
  if(!track)return;
  var cards=track.children,total=cards.length,idx=0;
  var dotsWrap=document.getElementById('revDots'),prev=document.getElementById('revPrev'),next=document.getElementById('revNext');
  function perView(){return innerWidth>1000?3:(innerWidth>600?2:1);}
  function maxIdx(){return Math.max(0,total-perView());}
  function step(){var r=cards[0].getBoundingClientRect(),g=parseFloat(getComputedStyle(track).gap)||22;return r.width+g;}
  function dots(){if(!dotsWrap)return;var n=maxIdx()+1;dotsWrap.innerHTML='';for(var k=0;k<n;k++){(function(k){var b=document.createElement('button');if(k===idx)b.className='on';b.setAttribute('aria-label','Slide '+(k+1));b.onclick=function(){idx=k;render();timer&&reset();};dotsWrap.appendChild(b);})(k);}}
  function render(){idx=Math.max(0,Math.min(idx,maxIdx()));track.style.transform='translateX('+(-idx*step())+'px)';dots();}
  var timer=null;
  function reset(){clearInterval(timer);timer=setInterval(function(){idx=idx>=maxIdx()?0:idx+1;render();},4800);}
  if(prev)prev.onclick=function(){idx=idx<=0?maxIdx():idx-1;render();reset();};
  if(next)next.onclick=function(){idx=idx>=maxIdx()?0:idx+1;render();reset();};
  var vp=track.parentElement;
  vp.addEventListener('mouseenter',function(){clearInterval(timer);});
  vp.addEventListener('mouseleave',reset);
  var rt;addEventListener('resize',function(){clearTimeout(rt);rt=setTimeout(render,150);});
  render();reset();
})();

/* Testimonials auto slider — advances right-to-left, pauses on hover */
(function(){
  document.querySelectorAll('.ttrack').forEach(function(track){
    var vp=track.parentElement, cards=track.children;
    if(!cards.length) return;
    var idx=0, timer=null;
    function step(){var r=cards[0].getBoundingClientRect(),g=parseFloat(getComputedStyle(track).gap)||22;return r.width+g;}
    function perView(){return innerWidth>900?3:(innerWidth>600?2:1);}
    function maxIdx(){return Math.max(0,cards.length-perView());}
    function render(){idx=Math.max(0,Math.min(idx,maxIdx()));track.style.transform='translateX('+(-idx*step())+'px)';}
    function go(){idx=idx>=maxIdx()?0:idx+1;render();}
    function start(){clearInterval(timer);timer=setInterval(go,4000);}
    vp.addEventListener('mouseenter',function(){clearInterval(timer);});
    vp.addEventListener('mouseleave',start);
    var rt;addEventListener('resize',function(){clearTimeout(rt);rt=setTimeout(function(){idx=0;render();},150);});
    render();start();
  });
})();

/* Lead forms: one button. On submit (after native validation) it opens a
   prefilled WhatsApp chat AND saves the enquiry via AJAX (DB + email) with
   NO page reload and NO ?sent=1 in the URL — just an inline thank-you. */
(function(){
  document.querySelectorAll('form.lead-form').forEach(function(form){
    var msg=document.createElement('div'); msg.className='form-msg'; form.appendChild(msg);
    form.addEventListener('submit',function(e){
      e.preventDefault();
      function v(n){var el=form.querySelector('[name="'+n+'"]');return el?(''+el.value).trim():'';}
      var t='Hi Aiqon Quick Cool, I would like a quote.';
      [['Name','name'],['Phone','phone'],['Email','email'],['Area','area'],['Service','service'],['Message','message']].forEach(function(p){
        var val=v(p[1]); if(val) t+='\n'+p[0]+': '+val;
      });
      var num=form.getAttribute('data-wa')||'60123456789';
      window.open('https://wa.me/'+num+'?text='+encodeURIComponent(t),'_blank');

      var btn=form.querySelector('[type="submit"]'); if(btn) btn.disabled=true;
      var data=new FormData(form); data.append('ajax','1');
      fetch(form.getAttribute('action')||'/api/contact.php',{
        method:'POST', body:data, headers:{'X-Requested-With':'XMLHttpRequest'}
      }).then(function(r){return r.json().catch(function(){return {ok:true};});})
        .then(function(res){
          if(btn) btn.disabled=false;
          if(res && res.ok===false){
            msg.className='form-msg bad show'; msg.textContent=res.error||'Please check your details and try again.';
          }else{
            msg.className='form-msg ok show';
            msg.textContent='Thank you! Your enquiry has been received — we will reply shortly. (We also opened WhatsApp so you can message us directly.)';
            form.reset();
          }
        }).catch(function(){
          if(btn) btn.disabled=false;
          msg.className='form-msg ok show';
          msg.textContent='We have opened WhatsApp for you — please tap send there so we get your message.';
        });
    });
  });
})();
