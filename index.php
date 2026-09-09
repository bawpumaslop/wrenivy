<?php require __DIR__ . '/8u1pqf.php' ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Wren &amp; Ivy &mdash; Women's Dresses, Separates and Layers</title>
<meta name="description" content="Wren & Ivy makes dresses, skirts, blouses and knitwear in sizes XS-XL. Free shipping over $78, 40-day returns, sewn in New Haven, Connecticut.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
:root{
  --ink:#1a1e1c; --ink-soft:#5f6663; --paper:#fffefd; --tint:#eef2f0;
  --line:#dce3e0; --accent:#2f6b5c; --gold:#b08423; --ok:#2f6b46;
  --serif:'PT Serif',Georgia,serif; --sans:'Inter',system-ui,sans-serif;
}
*{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth;scroll-padding-top:112px}
body{font-family:var(--sans);color:var(--ink);background:var(--paper);font-size:16px;line-height:1.6;-webkit-font-smoothing:antialiased}
svg{display:block}
a{color:inherit;text-decoration:none}
button{font:inherit;color:inherit;cursor:pointer;border:0;background:none}
.shell{max-width:1220px;margin:0 auto;padding:0 20px}
:focus-visible{outline:2px solid var(--accent);outline-offset:3px}

.ticker{background:var(--accent);color:#fff;font-size:13.5px;overflow:hidden;white-space:nowrap}
.ticker div{display:inline-block;padding:9px 0;animation:slide 28s linear infinite}
.ticker span{padding:0 34px}
@keyframes slide{from{transform:translateX(0)}to{transform:translateX(-50%)}}

header{position:sticky;top:0;z-index:60;background:rgba(255,254,253,.95);backdrop-filter:blur(10px);border-bottom:1px solid var(--line)}
.bar{display:flex;align-items:center;gap:28px;height:66px}
.brand{font-family:var(--serif);font-size:25px;font-weight:400;letter-spacing:.13em;line-height:1}
.brand small{display:block;font-family:var(--sans);font-size:9px;letter-spacing:.32em;color:var(--ink-soft);font-weight:500;margin-top:4px}
nav{display:flex;gap:26px;margin-left:auto;font-size:14.5px}
nav a{padding:4px 0;border-bottom:1.5px solid transparent;transition:border-color .18s}
nav a:hover{border-color:var(--accent)}
.cartbtn{display:flex;align-items:center;gap:8px;border:1px solid var(--ink);padding:9px 16px;font-size:14px;transition:.18s}
.cartbtn:hover{background:var(--ink);color:var(--paper)}
.count{background:var(--accent);color:#fff;min-width:20px;height:20px;border-radius:10px;font-size:11.5px;display:grid;place-items:center;padding:0 6px;font-weight:600}
.burger{display:none;font-size:22px;margin-left:auto}

.hero{display:grid;grid-template-columns:1fr 1fr;min-height:540px;border-bottom:1px solid var(--line)}
.hero-copy{background:var(--tint);display:flex;flex-direction:column;justify-content:center;padding:74px 6vw}
.eyebrow{font-size:12.5px;letter-spacing:.2em;color:var(--accent);margin-bottom:20px;font-weight:600}
.hero h1{font-family:var(--serif);font-size:clamp(38px,5vw,60px);line-height:1.05;font-weight:400;letter-spacing:-.015em}
.hero h1 em{font-style:italic}
.hero p{margin:24px 0 34px;max-width:40ch;color:var(--ink-soft);font-size:17px}
.hero-cta{display:flex;gap:14px;flex-wrap:wrap}
.btn{display:inline-block;padding:14px 30px;font-size:14.5px;letter-spacing:.05em;font-weight:500;transition:.18s}
.btn-solid{background:var(--ink);color:var(--paper)}
.btn-solid:hover{background:var(--accent);color:#fff}
.btn-line{border:1px solid var(--ink)}
.btn-line:hover{background:var(--ink);color:var(--paper)}
.hero-art{position:relative;overflow:hidden;background:#e5ece9;min-height:460px}
.ph{position:relative;overflow:hidden;width:100%;height:100%}
.ph>svg,.ph>img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
.hero-art>.ph{position:absolute;inset:0}
.pricetag{position:absolute;left:0;bottom:38px;z-index:3;background:var(--paper);padding:16px 26px 16px 22px}
.pricetag b{font-family:var(--serif);font-size:30px;font-weight:400;display:block}
.pricetag i{font-style:normal;font-size:12.5px;letter-spacing:.14em;color:var(--ink-soft)}

section{padding:82px 0}
.sec-head{display:flex;align-items:flex-end;justify-content:space-between;gap:24px;margin-bottom:38px;border-bottom:1px solid var(--line);padding-bottom:16px}
.sec-head h2{font-family:var(--serif);font-size:clamp(26px,3.3vw,37px);font-weight:400;letter-spacing:-.01em}
.sec-head p{font-size:14px;color:var(--ink-soft)}

.chips{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:34px}
.chip{border:1px solid var(--line);padding:9px 19px;font-size:14px;border-radius:999px;transition:.16s}
.chip:hover{border-color:var(--ink)}
.chip.on{background:var(--ink);color:var(--paper);border-color:var(--ink)}

.grid{display:grid;grid-template-columns:repeat(4,1fr);gap:34px 24px}
.card{display:flex;flex-direction:column}
.shot{position:relative;aspect-ratio:3/4;overflow:hidden;margin-bottom:14px}
.shot>.ph{position:absolute;inset:0}
.shot .alt{opacity:0;transition:opacity .35s}
.card:hover .shot .alt{opacity:1}
.badge{position:absolute;top:12px;left:12px;background:var(--accent);color:#fff;font-size:11px;letter-spacing:.11em;padding:5px 11px;font-weight:600;z-index:2}
.swatches{position:absolute;bottom:12px;left:12px;display:flex;gap:5px;z-index:2}
.sw{width:14px;height:14px;border-radius:50%;box-shadow:0 0 0 1.5px rgba(255,255,255,.9)}
.card h3{font-size:15.5px;font-weight:500;line-height:1.35}
.cat{font-size:12px;letter-spacing:.12em;color:var(--ink-soft);margin-bottom:5px}
.price{margin:9px 0 12px;display:flex;align-items:baseline;gap:9px}
.price b{font-family:var(--serif);font-size:20px;font-weight:400}
.price s{color:var(--ink-soft);font-size:14px}
.price em{font-style:normal;color:var(--accent);font-size:12.5px;font-weight:600}
.opts{display:flex;gap:6px;margin-bottom:12px;flex-wrap:wrap}
.opt{min-width:38px;height:32px;padding:0 10px;border:1px solid var(--line);font-size:12.5px;display:grid;place-items:center;transition:.14s}
.opt:hover{border-color:var(--ink)}
.opt.on{background:var(--ink);color:var(--paper);border-color:var(--ink)}
.add{margin-top:auto;border:1px solid var(--ink);padding:11px;font-size:13.5px;letter-spacing:.06em;font-weight:500;transition:.18s;width:100%}
.add:hover{background:var(--ink);color:var(--paper)}
.add.done{background:var(--ok);border-color:var(--ok);color:#fff}
.empty-note{grid-column:1/-1;padding:48px 0;text-align:center;color:var(--ink-soft)}

.edits{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
.edit{position:relative;aspect-ratio:4/5;overflow:hidden}
.edit>.ph{position:absolute;inset:0;transition:transform .6s}
.edit:hover>.ph{transform:scale(1.05)}
.edit span{position:absolute;left:0;bottom:24px;z-index:3;background:var(--paper);padding:12px 22px;font-family:var(--serif);font-size:19px}

.promise{background:var(--tint)}
.promise-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1px;background:var(--line)}
.promise-grid div{background:var(--tint);padding:32px 24px}
.promise-grid b{font-family:var(--serif);font-size:19px;font-weight:400;display:block;margin-bottom:7px}
.promise-grid p{font-size:14px;color:var(--ink-soft)}

.reviews{display:grid;grid-template-columns:repeat(3,1fr);gap:24px}
.rev{border:1px solid var(--line);padding:28px}
.stars{color:var(--gold);letter-spacing:3px;margin-bottom:14px;font-size:14px}
.rev p{font-size:15px;margin-bottom:18px}
.rev b{font-size:13.5px;font-weight:600;display:block}
.rev i{font-style:normal;font-size:12.5px;color:var(--ink-soft)}

.info{border-top:1px solid var(--line)}
details{border-bottom:1px solid var(--line)}
summary{padding:22px 0;font-size:16.5px;cursor:pointer;list-style:none;display:flex;justify-content:space-between;align-items:center;gap:16px}
summary::-webkit-details-marker{display:none}
summary::after{content:'+';font-size:22px;color:var(--accent);font-weight:300}
details[open] summary::after{content:'\2013'}
details .body{padding:0 0 24px;color:var(--ink-soft);font-size:15px;max-width:78ch}
details .body p+p{margin-top:12px}
details .body ul{margin:10px 0 0 18px}
table{border-collapse:collapse;margin-top:14px;font-size:14px}
th,td{border:1px solid var(--line);padding:8px 14px;text-align:left}
th{background:var(--tint);font-weight:600;color:var(--ink)}

footer{background:var(--ink);color:#e6ebe9;padding:64px 0 30px;font-size:14.5px}
.fgrid{display:grid;grid-template-columns:1.6fr 1fr 1fr;gap:48px;padding-bottom:44px;border-bottom:1px solid rgba(255,255,255,.14)}
footer .brand{color:#fff;margin-bottom:18px}
footer .brand small{color:rgba(255,255,255,.55)}
footer address{font-style:normal;color:rgba(255,255,255,.68);line-height:1.85;max-width:34ch}
footer h4{font-size:12.5px;letter-spacing:.16em;color:rgba(255,255,255,.5);margin-bottom:16px;font-weight:600}
footer li{list-style:none;margin-bottom:9px}
footer li a:hover{color:#fff;text-decoration:underline}
.legal{padding-top:26px;display:flex;justify-content:space-between;gap:20px;flex-wrap:wrap;font-size:13px;color:rgba(255,255,255,.5)}

.scrim{position:fixed;inset:0;background:rgba(20,18,17,.5);opacity:0;pointer-events:none;transition:opacity .28s;z-index:80}
.scrim.on{opacity:1;pointer-events:auto}
.drawer{position:fixed;top:0;right:0;height:100%;width:440px;max-width:100%;background:var(--paper);z-index:90;transform:translateX(100%);transition:transform .32s cubic-bezier(.4,0,.2,1);display:flex;flex-direction:column}
.drawer.on{transform:none}
.dhead{display:flex;align-items:center;justify-content:space-between;padding:22px 24px;border-bottom:1px solid var(--line)}
.dhead h3{font-family:var(--serif);font-size:22px;font-weight:400}
.close{font-size:26px;line-height:1;color:var(--ink-soft)}
.ship-bar{padding:12px 24px;background:var(--tint);border-bottom:1px solid var(--line);font-size:13.5px;display:none}
.ship-bar .track{height:4px;background:var(--line);margin-top:8px;overflow:hidden}
.ship-bar .fill{height:100%;background:var(--ok);width:0;transition:width .4s}
.dbody{flex:1;overflow-y:auto;padding:20px 24px}
.line{display:grid;grid-template-columns:76px 1fr;gap:14px;padding:16px 0;border-bottom:1px solid var(--line)}
.line .thumb{aspect-ratio:3/4;overflow:hidden;position:relative}
.line .thumb>.ph{position:absolute;inset:0}
.line h4{font-size:14.5px;font-weight:500;line-height:1.35}
.line .meta{font-size:12.5px;color:var(--ink-soft);margin:4px 0 9px}
.qty{display:flex;align-items:center;border:1px solid var(--line);width:fit-content}
.qty button{width:30px;height:29px;font-size:15px}
.qty button:hover{background:var(--tint)}
.qty span{width:34px;text-align:center;font-size:14px;border-left:1px solid var(--line);border-right:1px solid var(--line);line-height:29px}
.line .rowend{display:flex;justify-content:space-between;align-items:center;margin-top:9px}
.line .rowend b{font-family:var(--serif);font-size:16px;font-weight:400}
.rm{font-size:12.5px;color:var(--ink-soft);text-decoration:underline}
.rm:hover{color:var(--accent)}
.blank{text-align:center;padding:70px 10px;color:var(--ink-soft)}
.blank b{font-family:var(--serif);font-size:20px;color:var(--ink);display:block;margin-bottom:10px;font-weight:400}
.dfoot{border-top:1px solid var(--line);padding:20px 24px 24px;background:var(--tint)}
.coupon{display:flex;gap:8px;margin-bottom:16px}
.coupon input{flex:1;border:1px solid var(--line);padding:11px 13px;font:inherit;font-size:14px;background:#fff}
.coupon button{border:1px solid var(--ink);padding:0 18px;font-size:13.5px;font-weight:500}
.coupon button:hover{background:var(--ink);color:var(--paper)}
.cmsg{font-size:12.5px;margin:-8px 0 14px}
.cmsg.good{color:var(--ok)}
.cmsg.bad{color:var(--accent)}
.tot{display:flex;justify-content:space-between;font-size:14.5px;margin-bottom:8px;color:var(--ink-soft)}
.tot.grand{color:var(--ink);font-size:17px;padding-top:12px;border-top:1px solid var(--line);margin-top:12px}
.tot.grand b{font-family:var(--serif);font-size:23px;font-weight:400}
.checkout{width:100%;background:var(--ink);color:var(--paper);padding:15px;font-size:15px;letter-spacing:.05em;font-weight:500;margin-top:16px;transition:.18s}
.checkout:hover{background:var(--accent);color:#fff}
.checkout:disabled{opacity:.4;cursor:not-allowed}

.pane{display:none;flex:1;overflow-y:auto;padding:24px}
.pane.on{display:block}
.field{margin-bottom:15px}
.field label{display:block;font-size:12.5px;letter-spacing:.08em;color:var(--ink-soft);margin-bottom:6px;font-weight:600}
.field input,.field select{width:100%;border:1px solid var(--line);padding:12px 13px;font:inherit;font-size:15px;background:#fff;border-radius:0}
.field input:focus,.field select:focus{border-color:var(--ink);outline:none}
.field .err{color:var(--accent);font-size:12.5px;margin-top:5px;display:none}
.field.bad input,.field.bad select{border-color:var(--accent)}
.field.bad .err{display:block}
.two{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.three{display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:12px}
.back{font-size:13.5px;text-decoration:underline;color:var(--ink-soft);margin-bottom:20px;display:inline-block}
.paynote{font-size:12.5px;color:var(--ink-soft);margin-top:12px;text-align:center}
.done-box{text-align:center;padding:50px 8px}
.tick{width:58px;height:58px;border-radius:50%;background:var(--ok);color:#fff;display:grid;place-items:center;font-size:28px;margin:0 auto 22px}
.done-box h3{font-family:var(--serif);font-size:26px;font-weight:400;margin-bottom:10px}
.done-box p{color:var(--ink-soft);font-size:15px;margin-bottom:8px}
.oid{font-family:var(--serif);font-size:19px;letter-spacing:.06em;background:var(--tint);padding:11px 20px;display:inline-block;margin:14px 0 26px}

.toast{position:fixed;left:50%;bottom:34px;transform:translate(-50%,90px);background:var(--ink);color:var(--paper);padding:14px 26px;font-size:14.5px;z-index:120;opacity:0;transition:.3s}
.toast.on{transform:translate(-50%,0);opacity:1}

@media(max-width:1000px){
  .grid{grid-template-columns:repeat(3,1fr)}
  .promise-grid{grid-template-columns:1fr 1fr}
  .reviews{grid-template-columns:1fr}
  .fgrid{grid-template-columns:1fr 1fr}
}
@media(max-width:760px){
  html{scroll-padding-top:96px}
  nav{position:fixed;top:104px;left:0;right:0;background:var(--paper);flex-direction:column;gap:0;padding:0 20px;border-bottom:1px solid var(--line);max-height:0;overflow:hidden;transition:max-height .3s;margin:0}
  nav.on{max-height:320px}
  nav a{padding:15px 0;border-bottom:1px solid var(--line)}
  .burger{display:block}
  .cartbtn{margin-left:14px}
  .hero{grid-template-columns:1fr}
  .hero-copy{padding:52px 24px;order:2}
  .grid{grid-template-columns:1fr 1fr;gap:26px 16px}
  .edits{grid-template-columns:1fr}
  .promise-grid{grid-template-columns:1fr}
  .fgrid{grid-template-columns:1fr;gap:34px}
  .three{grid-template-columns:1fr 1fr}
  section{padding:58px 0}
}
@media(prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important;scroll-behavior:auto}}
</style>
</head>
<body>

<div class="ticker"><div><span>Free shipping over $78</span><span>WREN15 &mdash; 15% off orders over $75</span><span>40-day returns</span><span>Sewn in Connecticut</span><span>Free shipping over $78</span><span>WREN15 &mdash; 15% off orders over $75</span><span>40-day returns</span><span>Sewn in Connecticut</span></div></div>

<header>
  <div class="shell bar">
    <a href="#top" class="brand">WREN &amp; IVY<small>WOMEN'S CLOTHING</small></a>
    <button class="burger" id="burger" aria-label="Menu">&#9776;</button>
    <nav id="nav">
      <a href="#new">New</a>
      <a href="#shop">Shop</a>
      <a href="#edits">Edits</a>
      <a href="#reviews">Reviews</a>
      <a href="#help">Help</a>
    </nav>
    <button class="cartbtn" id="openCart">Bag <span class="count" id="count">0</span></button>
  </div>
</header>

<main id="top">

<div class="hero">
  <div class="hero-copy">
    <p class="eyebrow">SPRING RANGE &mdash; 24 STYLES</p>
    <h1>Made small,<br>made <em>properly</em>.</h1>
    <p>Every run is under two hundred units, cut and sewn in a shop we can drive to. When something fits badly we find out in weeks, not seasons, and we fix the pattern.</p>
    <div class="hero-cta">
      <a href="#shop" class="btn btn-solid">Shop the range</a>
      <a href="#help" class="btn btn-line">Fit guide</a>
    </div>
  </div>
  <div class="hero-art" id="heroArt">
    <div class="pricetag"><i>STARTING AT</i><b>$72</b></div>
  </div>
</div>

<section id="new">
  <div class="shell">
    <div class="sec-head"><h2>New arrivals</h2><p>A new capsule every ten weeks</p></div>
    <div class="grid" id="newGrid"></div>
  </div>
</section>

<section id="shop" style="padding-top:0">
  <div class="shell">
    <div class="sec-head"><h2>Shop all</h2><p><span id="shownCount">0</span> styles</p></div>
    <div class="chips" id="chips"><button class="chip on" data-f="all">Everything</button><button class="chip" data-f="Dresses">Dresses</button><button class="chip" data-f="Skirts">Skirts</button><button class="chip" data-f="Blouses">Blouses</button><button class="chip" data-f="Knitwear">Knitwear</button><button class="chip" data-f="Everyday">Everyday</button><button class="chip" data-f="Occasion">Occasion</button></div>
    <div class="grid" id="shopGrid"></div>
  </div>
</section>

<section id="edits" style="padding-top:0">
  <div class="shell">
    <div class="sec-head"><h2>Shop by edit</h2><p>Built to mix</p></div>
    <div class="edits" id="editRow"></div>
  </div>
</section>

<section class="promise">
  <div class="shell"><div class="promise-grid"><div><b>Free shipping over $78</b><p>Out the door in one business day from New Haven.</p></div><div><b>40-day returns</b><p>Prepaid label in the box, no restocking fee.</p></div><div><b>Runs under 200</b><p>Small batches mean fit problems get caught and fixed quickly.</p></div><div><b>Talk to a stylist</b><p>Mon&ndash;Fri, 9 AM &ndash; 5 PM ET at (203) 555-0146.</p></div></div></div>
</section>

<section id="reviews">
  <div class="shell">
    <div class="sec-head"><h2>What buyers say</h2><p>4.8 average across 1,690 orders</p></div>
    <div class="reviews"><div class="rev"><div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p>I emailed about the shoulder fit and they told me the next run had already been adjusted. Ordered again and it was noticeably better.</p><b>Constance A.</b><i>Verified buyer &mdash; Providence, RI</i></div><div class="rev"><div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p>The poplin dress washes and hangs dry without a single wrinkle needing attention. I own two now in different colours.</p><b>Yara D.</b><i>Verified buyer &mdash; White Plains, NY</i></div><div class="rev"><div class="stars">&#9733;&#9733;&#9733;&#9733;&#9734;</div><p>Knitwear runs a size large, as several reviews said. Take one down and you will be fine.</p><b>Beth L.</b><i>Verified buyer &mdash; Springfield, MA</i></div></div>
  </div>
</section>

<section id="help" class="info" style="padding-bottom:70px">
  <div class="shell">
    <div class="sec-head"><h2>Before you order</h2><p>Fit, fabric, returns</p></div>
    <details open><summary>Fit and size guide</summary><div class="body"><p>Garment measurements, flat, in inches. Knitwear is generous; woven pieces run true.</p><table><tr><th>Size</th><th>US</th><th>Bust</th><th>Waist</th><th>Hip</th></tr><tr><td>XS</td><td>0&ndash;2</td><td>32.5</td><td>25.5</td><td>35.5</td></tr><tr><td>S</td><td>4&ndash;6</td><td>34.5</td><td>27.5</td><td>37.5</td></tr><tr><td>M</td><td>8&ndash;10</td><td>36.5</td><td>29.5</td><td>39.5</td></tr><tr><td>L</td><td>12&ndash;14</td><td>38.5</td><td>31.5</td><td>41.5</td></tr><tr><td>XL</td><td>16&ndash;18</td><td>40.5</td><td>33.5</td><td>43.5</td></tr></table></div></details><details><summary>Fabric and care</summary><div class="body"><p>Washed linen, cotton poplin, Tencel twill and extra-fine merino. Linings are cotton.</p><p>Wovens wash cold on gentle and press best slightly damp. Merino washes cold and dries flat.</p></div></details><details><summary>Shipping and returns</summary><div class="body"><p>Free over $78, otherwise a flat $6.75. Orders before noon ET ship the same business day.</p><ul><li>40 days to return, unworn with tags.</li><li>First size exchange free.</li><li>Refunds post 5&ndash;7 business days after arrival.</li></ul></div></details>
    <details>
      <summary>Payment, tax and promo codes</summary>
      <div class="body">
        <p>We accept Visa, Mastercard, American Express, Discover, Apple Pay, Google Pay, PayPal and Shop Pay. Card details are handled by our payment processor and are never stored on our servers.</p>
        <p>Sales tax is calculated at checkout based on the shipping state. Five states &mdash; Alaska, Delaware, Montana, New Hampshire and Oregon &mdash; have no statewide sales tax.</p>
        <p>Two codes are live right now: <b>WREN10</b> takes 10% off any order, and <b>WREN15</b> takes 15% off orders over $75. One code per order.</p>
      </div>
    </details>
    <details>
      <summary>Privacy and terms</summary>
      <div class="body">
        <p>We collect your name, email, phone number and address only to process and deliver your order. We do not sell your personal information. California residents can request access to or deletion of their data under the CCPA by emailing us.</p>
        <p>Payment information is processed by our gateway and is never stored by us. Analytics cookies help us understand which pages people find useful; you can block them in your browser without breaking the site.</p>
        <p>Prices, promotions and availability may change without notice. Screen calibration can shift how colors appear. Placing an order means you accept these terms and the policies above. Any dispute is governed by the laws of the State of Connecticut.</p>
        <p>Questions about your data: privacy@wrenandivy.example, from the email used on your order.</p>
      </div>
    </details>
    <details>
      <summary>Contact us</summary>
      <div class="body">
        <p><b>Wren &amp; Ivy Apparel LLC</b><br>88 Bank St, Suite 3<br>New Haven, CT 06511, United States</p>
        <p>Phone: (203) 555-0146 &nbsp;&middot;&nbsp; Mon&ndash;Fri, 9 AM &ndash; 5 PM ET<br>Email: hello@wrenandivy.example</p>
      </div>
    </details>
  </div>
</section>

</main>

<footer>
  <div class="shell">
    <div class="fgrid">
      <div>
        <div class="brand">WREN &amp; IVY<small>WOMEN'S CLOTHING</small></div>
        <address>Wren &amp; Ivy Apparel LLC<br>88 Bank St, Suite 3<br>New Haven, CT 06511, United States<br>(203) 555-0146</address>
      </div>
      <div>
        <h4>SHOP</h4>
        <ul>
          <li><a href="#new">New</a></li>
          <li><a href="#shop">Shop</a></li>
          <li><a href="#edits">Edits</a></li>
          <li><a href="#reviews">Reviews</a></li>
        </ul>
      </div>
      <div>
        <h4>HELP</h4>
        <ul>
          <li><a href="#help">Shipping</a></li>
          <li><a href="#help">Returns</a></li>
          <li><a href="#help">Payment and tax</a></li>
          <li><a href="#help">Privacy and terms</a></li>
          <li><a href="#help">Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="legal">
      <span>&copy; 2026 Wren &amp; Ivy Apparel LLC. All rights reserved.</span>
      <span>Sales tax calculated at checkout</span>
    </div>
  </div>
</footer>

<div class="scrim" id="scrim"></div>

<aside class="drawer" id="drawer" aria-label="Bag">
  <div class="dhead">
    <h3 id="drawerTitle">Your bag</h3>
    <button class="close" id="closeCart" aria-label="Close">&times;</button>
  </div>

  <div class="ship-bar" id="shipBar">
    <span id="shipMsg"></span>
    <div class="track"><div class="fill" id="shipFill"></div></div>
  </div>

  <div class="dbody pane on" id="paneBag"></div>
  <div class="dfoot" id="bagFoot">
    <div class="coupon">
      <input id="cpn" placeholder="Promo code" aria-label="Promo code">
      <button id="applyCpn">Apply</button>
    </div>
    <div class="cmsg" id="cmsg"></div>
    <div class="tot"><span>Subtotal</span><span id="sub">$0.00</span></div>
    <div class="tot" id="discRow" style="display:none"><span id="discLabel">Discount</span><span id="disc">&ndash;$0.00</span></div>
    <div class="tot"><span>Shipping</span><span id="shipCost">&mdash;</span></div>
    <div class="tot"><span>Estimated tax</span><span>Calculated at checkout</span></div>
    <div class="tot grand"><span>Total</span><b id="grand">$0.00</b></div>
    <button class="checkout" id="toCheckout" disabled>Checkout</button>
  </div>

  <div class="pane" id="paneForm">
    <a class="back" id="backToBag" href="#">&larr; Back to bag</a>
    <div class="two">
      <div class="field"><label for="f-first">FIRST NAME</label><input id="f-first" autocomplete="given-name"><span class="err">Required</span></div>
      <div class="field"><label for="f-last">LAST NAME</label><input id="f-last" autocomplete="family-name"><span class="err">Required</span></div>
    </div>
    <div class="field"><label for="f-email">EMAIL</label><input id="f-email" type="email" autocomplete="email"><span class="err">Enter a valid email</span></div>
    <div class="field"><label for="f-phone">PHONE</label><input id="f-phone" inputmode="tel" placeholder="(555) 123-4567" autocomplete="tel"><span class="err">Enter a 10-digit US number</span></div>
    <div class="field"><label for="f-addr">STREET ADDRESS</label><input id="f-addr" autocomplete="address-line1"><span class="err">Required</span></div>
    <div class="field"><label for="f-addr2">APT / SUITE (OPTIONAL)</label><input id="f-addr2" autocomplete="address-line2"></div>
    <div class="three">
      <div class="field"><label for="f-city">CITY</label><input id="f-city" autocomplete="address-level2"><span class="err">Required</span></div>
      <div class="field"><label for="f-state">STATE</label><select id="f-state" autocomplete="address-level1"></select><span class="err">Required</span></div>
      <div class="field"><label for="f-zip">ZIP</label><input id="f-zip" inputmode="numeric" placeholder="06511" autocomplete="postal-code"><span class="err">5 digits</span></div>
    </div>
    <div class="tot"><span>Subtotal</span><span id="c-sub">$0.00</span></div>
    <div class="tot" id="c-discRow" style="display:none"><span>Discount</span><span id="c-disc">&ndash;$0.00</span></div>
    <div class="tot"><span>Shipping</span><span id="c-ship">&mdash;</span></div>
    <div class="tot"><span id="c-taxLabel">Sales tax</span><span id="c-tax">&mdash;</span></div>
    <div class="tot grand"><span>Total</span><b id="grand2">$0.00</b></div>
    <button class="checkout" id="placeOrder">Place order</button>
    <p class="paynote">Demo checkout &mdash; no card is charged and no data leaves this page.</p>
  </div>

  <div class="pane" id="paneDone">
    <div class="done-box">
      <div class="tick">&#10003;</div>
      <h3>Order confirmed</h3>
      <p>A confirmation email is on its way with your tracking number.</p>
      <div class="oid" id="orderId">WI-000000</div>
      <p id="doneLine">&mdash;</p>
      <button class="btn btn-line" id="keepShopping" style="margin-top:24px">Keep shopping</button>
    </div>
  </div>
</aside>

<div class="toast" id="toast"></div>

<script>
(function(){
'use strict';

var SHAPES = {
vase:function(f,d){return '<path d="M128,138 L123,170 C99,214 106,300 134,332 L166,332 C194,300 201,214 177,170 L172,138 Z" fill="'+f+'"/>'+
 '<ellipse cx="150" cy="138" rx="24" ry="7.5" fill="'+d+'" opacity=".28"/>'+
 '<path d="M132,200 Q150,214 168,200" stroke="'+d+'" stroke-opacity=".16" stroke-width="4" fill="none"/>'+
 '<path d="M128,238 Q150,254 172,238" stroke="'+d+'" stroke-opacity=".16" stroke-width="4" fill="none"/>';},
lamp:function(f,d){return '<path d="M110,118 L190,118 L212,206 L88,206 Z" fill="'+f+'"/>'+
 '<rect x="145" y="206" width="10" height="112" fill="'+d+'" opacity=".55"/>'+
 '<path d="M112,338 Q150,318 188,338 Q150,348 112,338 Z" fill="'+d+'" opacity=".55"/>'+
 '<rect x="88" y="200" width="124" height="8" fill="'+d+'" opacity=".2"/>';},
cushion:function(f,d){return '<path d="M96,142 Q150,128 204,142 Q218,196 204,250 Q150,264 96,250 Q82,196 96,142 Z" fill="'+f+'"/>'+
 '<circle cx="150" cy="196" r="7" fill="'+d+'" opacity=".24"/>'+
 '<g stroke="'+d+'" stroke-opacity=".14" stroke-width="3" fill="none"><path d="M112,158 Q150,150 188,158"/><path d="M112,234 Q150,242 188,234"/></g>';},
mirror:function(f,d){return '<circle cx="150" cy="212" r="86" fill="'+f+'"/>'+
 '<circle cx="150" cy="212" r="70" fill="'+d+'" opacity=".13"/>'+
 '<path d="M150,126 L150,96" stroke="'+d+'" stroke-opacity=".45" stroke-width="5"/>'+
 '<circle cx="150" cy="92" r="7" fill="'+d+'" opacity=".45"/>';},
planter:function(f,d){return '<g fill="'+f+'"><ellipse cx="122" cy="176" rx="26" ry="13" transform="rotate(-32 122 176)"/>'+
 '<ellipse cx="180" cy="168" rx="26" ry="13" transform="rotate(28 180 168)"/>'+
 '<ellipse cx="150" cy="140" rx="16" ry="30"/></g>'+
 '<path d="M150,220 L150,150" stroke="'+d+'" stroke-opacity=".4" stroke-width="4"/>'+
 '<path d="M112,222 L188,222 L176,330 L124,330 Z" fill="'+f+'"/>'+
 '<rect x="106" y="212" width="88" height="14" rx="4" fill="'+d+'" opacity=".22"/>';},
blanket:function(f,d){return '<g><rect x="82" y="150" width="136" height="52" rx="8" fill="'+f+'"/>'+
 '<rect x="90" y="206" width="136" height="52" rx="8" fill="'+f+'"/>'+
 '<rect x="76" y="262" width="136" height="52" rx="8" fill="'+f+'"/></g>'+
 '<g stroke="'+d+'" stroke-opacity=".2" stroke-width="3"><path d="M82,176 H218"/><path d="M90,232 H226"/><path d="M76,288 H212"/></g>';},

tote:function(f,d){return '<path d="M100,172 L200,172 L212,322 L88,322 Z" fill="'+f+'"/>'+
 '<path d="M120,172 Q120,124 150,124 Q180,124 180,172" stroke="'+f+'" stroke-width="9" fill="none"/>'+
 '<rect x="88" y="166" width="124" height="12" fill="'+d+'" opacity=".22"/>'+
 '<rect x="122" y="236" width="56" height="34" rx="4" fill="'+d+'" opacity=".16"/>';},
sneaker:function(f,d){return '<path d="M74,268 Q84,206 128,202 L172,230 Q212,242 226,266 L226,290 L74,290 Z" fill="'+f+'"/>'+
 '<rect x="70" y="288" width="160" height="18" rx="9" fill="'+d+'" opacity=".55"/>'+
 '<g stroke="'+d+'" stroke-opacity=".28" stroke-width="4"><path d="M118,216 L142,240"/><path d="M132,210 L156,236"/><path d="M146,206 L170,232"/></g>'+
 '<path d="M196,250 Q214,258 224,272" stroke="'+d+'" stroke-opacity=".24" stroke-width="4" fill="none"/>';},
cap:function(f,d){return '<path d="M92,244 A58,58 0 0 1 208,244 Z" fill="'+f+'"/>'+
 '<path d="M92,244 Q60,250 54,272 L172,272 Q176,250 208,244 Z" fill="'+f+'"/>'+
 '<path d="M92,244 H208" stroke="'+d+'" stroke-opacity=".22" stroke-width="4"/>'+
 '<circle cx="150" cy="190" r="7" fill="'+d+'" opacity=".3"/>'+
 '<path d="M150,190 V244" stroke="'+d+'" stroke-opacity=".18" stroke-width="3"/>';},
sunglasses:function(f,d){return '<rect x="56" y="186" width="82" height="58" rx="18" fill="'+f+'"/>'+
 '<rect x="162" y="186" width="82" height="58" rx="18" fill="'+f+'"/>'+
 '<path d="M138,206 Q150,198 162,206" stroke="'+f+'" stroke-width="10" fill="none"/>'+
 '<path d="M56,198 L34,182" stroke="'+f+'" stroke-width="9"/><path d="M244,198 L266,182" stroke="'+f+'" stroke-width="9"/>'+
 '<rect x="64" y="194" width="66" height="42" rx="14" fill="'+d+'" opacity=".22"/>'+
 '<rect x="170" y="194" width="66" height="42" rx="14" fill="'+d+'" opacity=".22"/>';},
watch:function(f,d){return '<rect x="132" y="106" width="36" height="76" rx="8" fill="'+d+'" opacity=".5"/>'+
 '<rect x="132" y="238" width="36" height="76" rx="8" fill="'+d+'" opacity=".5"/>'+
 '<circle cx="150" cy="210" r="58" fill="'+f+'"/>'+
 '<circle cx="150" cy="210" r="44" fill="'+d+'" opacity=".14"/>'+
 '<g stroke="'+d+'" stroke-opacity=".6" stroke-width="4" stroke-linecap="round"><path d="M150,210 V180"/><path d="M150,210 L172,222"/></g>';},
belt:function(f,d){return '<rect x="40" y="188" width="180" height="42" rx="6" fill="'+f+'"/>'+
 '<rect x="216" y="180" width="52" height="58" rx="8" fill="'+d+'" opacity=".55"/>'+
 '<rect x="228" y="192" width="28" height="34" rx="4" fill="#fff" opacity=".85"/>'+
 '<g fill="'+d+'" opacity=".3"><circle cx="80" cy="209" r="5"/><circle cx="112" cy="209" r="5"/><circle cx="144" cy="209" r="5"/></g>';},

ramen:function(f,d){return '<path d="M70,214 Q150,244 230,214 L208,322 Q150,342 92,322 Z" fill="'+f+'"/>'+
 '<ellipse cx="150" cy="216" rx="80" ry="24" fill="'+d+'" opacity=".18"/>'+
 '<g stroke="#fff" stroke-opacity=".65" stroke-width="4" fill="none">'+
 '<path d="M104,214 Q126,196 150,212"/><path d="M136,218 Q160,198 186,214"/><path d="M114,226 Q146,210 178,226"/></g>'+
 '<circle cx="182" cy="212" r="15" fill="#fff" opacity=".9"/><circle cx="182" cy="212" r="7" fill="'+d+'" opacity=".45"/>'+
 '<path d="M96,190 L200,132" stroke="'+d+'" stroke-opacity=".45" stroke-width="5"/>'+
 '<path d="M104,200 L208,142" stroke="'+d+'" stroke-opacity=".45" stroke-width="5"/>';},
steakplate:function(f,d){return '<ellipse cx="150" cy="236" rx="116" ry="52" fill="#fff" opacity=".9"/>'+
 '<ellipse cx="150" cy="236" rx="96" ry="42" fill="'+d+'" opacity=".08"/>'+
 '<path d="M108,224 Q126,204 158,210 Q194,216 196,238 Q196,262 158,264 Q114,262 108,240 Z" fill="'+f+'"/>'+
 '<g stroke="'+d+'" stroke-opacity=".3" stroke-width="4"><path d="M122,222 L134,254"/><path d="M146,216 L156,258"/><path d="M170,218 L178,254"/></g>'+
 '<circle cx="96" cy="252" r="9" fill="'+d+'" opacity=".3"/><circle cx="206" cy="248" r="9" fill="'+d+'" opacity=".3"/>';},
burger:function(f,d){return '<path d="M84,206 A66,58 0 0 1 216,206 Z" fill="'+f+'"/>'+
 '<g fill="'+d+'" opacity=".28"><circle cx="122" cy="180" r="4"/><circle cx="150" cy="170" r="4"/><circle cx="178" cy="182" r="4"/></g>'+
 '<path d="M80,208 Q150,226 220,208 L220,222 Q150,240 80,222 Z" fill="#7fa650"/>'+
 '<rect x="82" y="226" width="136" height="26" rx="8" fill="'+d+'" opacity=".6"/>'+
 '<path d="M92,254 L208,254 L192,272 L108,272 Z" fill="#e0a92e"/>'+
 '<path d="M84,272 Q150,300 216,272 L212,296 Q150,318 88,296 Z" fill="'+f+'"/>';},
pizza:function(f,d){return '<path d="M150,110 L242,300 Q150,330 58,300 Z" fill="'+f+'"/>'+
 '<path d="M58,300 Q150,330 242,300 L250,322 Q150,354 50,322 Z" fill="'+d+'" opacity=".38"/>'+
 '<g fill="'+d+'" opacity=".42"><circle cx="150" cy="196" r="13"/><circle cx="118" cy="256" r="13"/><circle cx="184" cy="256" r="13"/><circle cx="150" cy="290" r="11"/></g>';},
saladbowl:function(f,d){return '<g fill="'+f+'"><circle cx="118" cy="200" r="30"/><circle cx="180" cy="196" r="34"/><circle cx="150" cy="226" r="30"/></g>'+
 '<circle cx="132" cy="188" r="10" fill="#c8452f"/><circle cx="196" cy="216" r="10" fill="#c8452f"/>'+
 '<path d="M66,222 Q150,254 234,222 L214,318 Q150,338 86,318 Z" fill="#fff" opacity=".92"/>'+
 '<ellipse cx="150" cy="224" rx="84" ry="24" fill="'+d+'" opacity=".1"/>';},
dessert:function(f,d){return '<path d="M104,318 L118,178 L182,178 L196,318 Z" fill="#fff" opacity=".9"/>'+
 '<path d="M118,178 L182,178 L178,214 L122,214 Z" fill="'+f+'"/>'+
 '<path d="M122,222 L178,222 L174,258 L126,258 Z" fill="'+d+'" opacity=".35"/>'+
 '<path d="M112,152 Q150,120 188,152 Q150,172 112,152 Z" fill="'+f+'"/>'+
 '<circle cx="150" cy="136" r="12" fill="#c8452f"/>';},

giftbox:function(f,d){return '<rect x="88" y="180" width="124" height="140" rx="4" fill="'+f+'"/>'+
 '<rect x="78" y="150" width="144" height="36" rx="4" fill="'+d+'" opacity=".55"/>'+
 '<rect x="138" y="150" width="24" height="170" fill="#fff" opacity=".55"/>'+
 '<path d="M150,150 Q108,110 122,142 Q132,158 150,152 Z" fill="#fff" opacity=".7"/>'+
 '<path d="M150,150 Q192,110 178,142 Q168,158 150,152 Z" fill="#fff" opacity=".7"/>';},
candle:function(f,d){return '<rect x="108" y="196" width="84" height="128" rx="10" fill="'+f+'"/>'+
 '<rect x="108" y="196" width="84" height="24" rx="8" fill="'+d+'" opacity=".25"/>'+
 '<rect x="120" y="244" width="60" height="46" rx="4" fill="#fff" opacity=".55"/>'+
 '<path d="M150,190 V166" stroke="'+d+'" stroke-width="4"/>'+
 '<path d="M150,132 Q168,152 150,166 Q132,152 150,132 Z" fill="#e8a33d"/>';},
mug:function(f,d){return '<path d="M96,180 L196,180 L188,312 Q146,326 104,312 Z" fill="'+f+'"/>'+
 '<path d="M196,204 Q234,206 234,240 Q234,274 192,272" stroke="'+f+'" stroke-width="16" fill="none"/>'+
 '<rect x="92" y="174" width="108" height="12" rx="4" fill="'+d+'" opacity=".24"/>'+
 '<g stroke="'+d+'" stroke-opacity=".28" stroke-width="4" fill="none"><path d="M128,150 Q140,134 128,116"/><path d="M164,150 Q176,134 164,116"/></g>';},
book:function(f,d){return '<rect x="96" y="128" width="112" height="184" rx="4" fill="'+f+'"/>'+
 '<rect x="96" y="128" width="20" height="184" fill="'+d+'" opacity=".35"/>'+
 '<rect x="206" y="136" width="10" height="168" fill="#fff" opacity=".8"/>'+
 '<g stroke="#fff" stroke-opacity=".55" stroke-width="4"><path d="M132,180 H188"/><path d="M132,204 H176"/></g>'+
 '<rect x="126" y="240" width="52" height="34" rx="3" fill="#fff" opacity=".3"/>';},
hamper:function(f,d){return '<g fill="'+f+'" opacity=".95"><circle cx="118" cy="188" r="22"/><circle cx="152" cy="176" r="24"/><circle cx="186" cy="190" r="20"/></g>'+
 '<path d="M84,208 L216,208 L200,320 L100,320 Z" fill="'+d+'" opacity=".55"/>'+
 '<g stroke="#fff" stroke-opacity=".4" stroke-width="4"><path d="M90,246 H210"/><path d="M94,282 H206"/></g>'+
 '<path d="M104,206 Q150,150 196,206" stroke="'+d+'" stroke-opacity=".5" stroke-width="7" fill="none"/>';},
card:function(f,d){return '<rect x="72" y="176" width="156" height="112" rx="6" fill="'+f+'"/>'+
 '<path d="M72,180 L150,244 L228,180" stroke="'+d+'" stroke-opacity=".35" stroke-width="6" fill="none"/>'+
 '<path d="M150,152 Q134,132 122,148 Q112,162 150,186 Q188,162 178,148 Q166,132 150,152 Z" fill="#c8452f" opacity=".85"/>';},

dress:function(f,d){return '<path d="M116,118 L150,148 L184,118 L198,182 L232,332 Q150,352 68,332 L102,182 Z" fill="'+f+'"/>'+
 '<path d="M116,118 Q150,104 184,118" stroke="'+d+'" stroke-opacity=".3" stroke-width="4" fill="none"/>'+
 '<path d="M100,190 Q150,206 200,190" stroke="'+d+'" stroke-opacity=".26" stroke-width="4" fill="none"/>'+
 '<g stroke="'+d+'" stroke-opacity=".14" stroke-width="3"><path d="M124,200 L104,330"/><path d="M150,204 L150,340"/><path d="M176,200 L196,330"/></g>';},
skirt:function(f,d){return '<rect x="110" y="140" width="80" height="22" rx="4" fill="'+d+'" opacity=".45"/>'+
 '<path d="M110,162 L190,162 L224,316 Q150,336 76,316 Z" fill="'+f+'"/>'+
 '<g stroke="'+d+'" stroke-opacity=".16" stroke-width="3"><path d="M128,166 L106,320"/><path d="M150,166 L150,330"/><path d="M172,166 L194,320"/></g>';},
blouse:function(f,d){return '<path d="M108,120 L70,144 L58,212 L100,224 L112,172 Z" fill="'+f+'"/>'+
 '<path d="M192,120 L230,144 L242,212 L200,224 L188,172 Z" fill="'+f+'"/>'+
 '<path d="M108,120 L130,118 L150,166 L170,118 L192,120 L204,320 Q150,336 96,320 Z" fill="'+f+'"/>'+
 '<path d="M130,118 L150,166 L170,118" stroke="'+d+'" stroke-opacity=".3" stroke-width="4" fill="none"/>'+
 '<g stroke="'+d+'" stroke-opacity=".14" stroke-width="3"><path d="M124,190 Q120,260 126,314"/><path d="M176,190 Q180,260 174,314"/></g>';},
jumpsuit:function(f,d){return '<path d="M112,116 L188,116 L198,228 L202,344 L158,344 L150,244 L142,344 L98,344 L102,228 Z" fill="'+f+'"/>'+
 '<rect x="98" y="196" width="104" height="16" rx="4" fill="'+d+'" opacity=".35"/>'+
 '<path d="M128,116 Q150,132 172,116" stroke="'+d+'" stroke-opacity=".3" stroke-width="4" fill="none"/>'+
 '<path d="M150,212 V244" stroke="'+d+'" stroke-opacity=".2" stroke-width="3"/>';},
coat:function(f,d){return '<path d="M100,118 L62,146 L46,268 L88,280 L98,180 Z" fill="'+f+'"/>'+
 '<path d="M200,118 L238,146 L254,268 L212,280 L202,180 Z" fill="'+f+'"/>'+
 '<path d="M100,118 L200,118 L214,346 Q150,360 86,346 Z" fill="'+f+'"/>'+
 '<path d="M150,164 L112,112 L136,104 L152,138 Z" fill="'+d+'" opacity=".2"/>'+
 '<path d="M150,164 L188,112 L164,104 L148,138 Z" fill="'+d+'" opacity=".2"/>'+
 '<rect x="86" y="228" width="128" height="18" rx="4" fill="'+d+'" opacity=".45"/>'+
 '<circle cx="150" cy="237" r="10" fill="#fff" opacity=".6"/>';},
cardigan:function(f,d){return '<path d="M104,118 L66,144 L52,258 L94,270 L104,176 Z" fill="'+f+'"/>'+
 '<path d="M196,118 L234,144 L248,258 L206,270 L196,176 Z" fill="'+f+'"/>'+
 '<path d="M104,118 L146,126 L142,330 Q118,332 96,326 Z" fill="'+f+'"/>'+
 '<path d="M196,118 L154,126 L158,330 Q182,332 204,326 Z" fill="'+f+'"/>'+
 '<g fill="'+d+'" opacity=".4"><circle cx="152" cy="170" r="5"/><circle cx="152" cy="214" r="5"/><circle cx="152" cy="258" r="5"/></g>';}
};

SHAPES.pawprint=function(f,d){return '<ellipse cx="150" cy="262" rx="62" ry="50" fill="'+f+'"/>'+
 '<ellipse cx="98" cy="188" rx="21" ry="27" fill="'+f+'" transform="rotate(-18 98 188)"/>'+
 '<ellipse cx="134" cy="164" rx="21" ry="28" fill="'+f+'"/>'+
 '<ellipse cx="172" cy="166" rx="21" ry="28" fill="'+f+'"/>'+
 '<ellipse cx="206" cy="192" rx="21" ry="27" fill="'+f+'" transform="rotate(18 206 192)"/>'+
 '<ellipse cx="150" cy="262" rx="30" ry="22" fill="'+d+'" opacity=".12"/>';};
SHAPES.bone=function(f,d){return '<rect x="96" y="196" width="108" height="42" rx="16" fill="'+f+'"/>'+
 '<circle cx="96" cy="196" r="26" fill="'+f+'"/><circle cx="96" cy="240" r="26" fill="'+f+'"/>'+
 '<circle cx="204" cy="196" r="26" fill="'+f+'"/><circle cx="204" cy="240" r="26" fill="'+f+'"/>'+
 '<rect x="120" y="210" width="60" height="14" rx="7" fill="'+d+'" opacity=".14"/>';};
SHAPES.collar=function(f,d){return '<circle cx="150" cy="204" r="72" fill="none" stroke="'+f+'" stroke-width="26"/>'+
 '<rect x="120" y="118" width="60" height="30" rx="6" fill="'+d+'" opacity=".5"/>'+
 '<path d="M150,278 L150,306" stroke="'+d+'" stroke-opacity=".4" stroke-width="5"/>'+
 '<circle cx="150" cy="322" r="18" fill="'+f+'"/><circle cx="150" cy="322" r="8" fill="'+d+'" opacity=".3"/>';};
SHAPES.dogbowl=function(f,d){return '<g fill="'+d+'" opacity=".45"><circle cx="122" cy="204" r="13"/>'+
 '<circle cx="152" cy="194" r="14"/><circle cx="182" cy="206" r="12"/><circle cx="138" cy="216" r="11"/>'+
 '<circle cx="168" cy="218" r="11"/></g>'+
 '<path d="M76,214 Q150,246 224,214 L204,318 Q150,336 96,318 Z" fill="'+f+'"/>'+
 '<ellipse cx="150" cy="216" rx="76" ry="22" fill="'+d+'" opacity=".16"/>'+
 '<path d="M92,286 Q150,302 208,286" stroke="'+d+'" stroke-opacity=".2" stroke-width="6" fill="none"/>';};
SHAPES.leash=function(f,d){return '<rect x="98" y="112" width="104" height="46" rx="23" fill="none" stroke="'+f+'" stroke-width="18"/>'+
 '<path d="M150,158 Q104,206 150,254 Q196,302 150,336" stroke="'+f+'" stroke-width="16" fill="none" stroke-linecap="round"/>'+
 '<circle cx="150" cy="248" r="12" fill="'+d+'" opacity=".25"/>';};
SHAPES.pettoy=function(f,d){return '<circle cx="150" cy="232" r="84" fill="'+f+'"/>'+
 '<path d="M78,190 Q150,222 222,190" stroke="'+d+'" stroke-opacity=".28" stroke-width="10" fill="none"/>'+
 '<path d="M78,274 Q150,242 222,274" stroke="'+d+'" stroke-opacity=".28" stroke-width="10" fill="none"/>'+
 '<circle cx="122" cy="204" r="12" fill="#fff" opacity=".3"/>';};

SHAPES.cabinet=function(f,d){return '<rect x="76" y="150" width="148" height="24" rx="4" fill="'+d+'" opacity=".45"/>'+
 '<rect x="84" y="174" width="132" height="160" fill="'+f+'"/>'+
 '<rect x="148" y="174" width="4" height="160" fill="'+d+'" opacity=".3"/>'+
 '<rect x="126" y="238" width="8" height="34" rx="4" fill="'+d+'" opacity=".5"/>'+
 '<rect x="166" y="238" width="8" height="34" rx="4" fill="'+d+'" opacity=".5"/>';};
SHAPES.island=function(f,d){return '<rect x="64" y="192" width="172" height="24" rx="4" fill="'+d+'" opacity=".4"/>'+
 '<rect x="78" y="216" width="144" height="112" fill="'+f+'"/>'+
 '<g stroke="'+d+'" stroke-opacity=".22" stroke-width="4"><path d="M150,216 V328"/></g>'+
 '<circle cx="106" cy="150" r="18" fill="'+f+'"/><path d="M106,168 V192" stroke="'+d+'" stroke-opacity=".4" stroke-width="5"/>'+
 '<circle cx="194" cy="150" r="18" fill="'+f+'"/><path d="M194,168 V192" stroke="'+d+'" stroke-opacity=".4" stroke-width="5"/>';};
SHAPES.faucet=function(f,d){return '<path d="M150,236 V150 Q150,116 186,116 Q216,116 216,146" stroke="'+f+'" stroke-width="14" fill="none" stroke-linecap="round"/>'+
 '<path d="M88,244 L212,244 L200,314 Q150,328 100,314 Z" fill="'+f+'"/>'+
 '<ellipse cx="150" cy="246" rx="62" ry="16" fill="'+d+'" opacity=".18"/>'+
 '<circle cx="150" cy="284" r="9" fill="'+d+'" opacity=".3"/>';};
SHAPES.stool=function(f,d){return '<ellipse cx="150" cy="176" rx="66" ry="20" fill="'+f+'"/>'+
 '<rect x="84" y="176" width="132" height="14" fill="'+f+'"/>'+
 '<g stroke="'+f+'" stroke-width="12" stroke-linecap="round"><path d="M104,190 L94,326"/><path d="M196,190 L206,326"/><path d="M150,190 V326"/></g>'+
 '<path d="M104,268 L196,268" stroke="'+d+'" stroke-opacity=".35" stroke-width="8"/>';};
SHAPES.pendant=function(f,d){return '<g stroke="'+d+'" stroke-opacity=".4" stroke-width="4">'+
 '<path d="M96,96 V186"/><path d="M150,96 V214"/><path d="M204,96 V186"/></g>'+
 '<path d="M74,232 L118,232 L106,186 L86,186 Z" fill="'+f+'"/>'+
 '<path d="M126,260 L174,260 L162,214 L138,214 Z" fill="'+f+'"/>'+
 '<path d="M182,232 L226,232 L214,186 L194,186 Z" fill="'+f+'"/>';};
SHAPES.tilewall=function(f,d){return '<g fill="'+f+'">'+
 '<rect x="66" y="128" width="76" height="52" rx="4"/><rect x="150" y="128" width="76" height="52" rx="4"/>'+
 '<rect x="66" y="188" width="76" height="52" rx="4"/><rect x="150" y="188" width="76" height="52" rx="4"/>'+
 '<rect x="66" y="248" width="76" height="52" rx="4"/><rect x="150" y="248" width="76" height="52" rx="4"/></g>'+
 '<g fill="'+d+'" opacity=".12"><rect x="150" y="128" width="76" height="52" rx="4"/>'+
 '<rect x="66" y="188" width="76" height="52" rx="4"/><rect x="150" y="248" width="76" height="52" rx="4"/></g>';};


var CFG = {"prefix": "WI", "code10": "WREN10", "code15": "WREN15", "imgs": ["photo-1609505848912-b7c3b8b4beda", "photo-1595777457583-95e059d581b8", "photo-1612336307429-8a898d10e223", "photo-1515372039744-b8f02a3ae446", "photo-1542295669297-4d352b042bca", "photo-1532675432006-329c6fed7045", "photo-1496747611176-843222e1e57c", "photo-1617019114583-affb34d1b3cd", "photo-1612722432474-b971cdcea546", "photo-1511130558090-00af810c21b1", "photo-1495385794356-15371f348c31", "photo-1565462905097-5e701c31dcfb", "photo-1753192108753-81be0db2f7fe", "photo-1502716119720-b23a93e5fe1b", "photo-1508742345712-0656a285ac27"], "freeShip": 78, "flatShip": 6.75, "freeMsg": "free shipping", "options": ["XS", "S", "M", "L", "XL"], "optionLabel": "Size", "bagLc": "bag", "browseBtn": "Browse styles", "checkoutTitle": "Shipping and payment", "doneVerb": "shipping to", "edits": [{"label": "Everyday", "pid": "I01", "filter": "Everyday"}, {"label": "Occasion", "pid": "I04", "filter": "Occasion"}, {"label": "Layers", "pid": "I06", "filter": "Knitwear"}], "products": [{"id": "I01", "name": "Poplin Tie Waist Dress", "cat": "Dresses", "tags": ["Everyday"], "price": 126, "msrp": 258, "shape": "dress", "print": "solid", "main": ["#2f6b5c", "#d2e6de", "#e8f1ec"], "alt": ["#8a5c3a", "#eddccb", "#f4ede4"], "tag": "NEW", "fresh": true}, {"id": "I02", "name": "Gathered Linen Skirt", "cat": "Skirts", "tags": ["Everyday"], "price": 90, "msrp": 186, "shape": "skirt", "print": "solid", "main": ["#c4b49a", "#efe7da", "#f3efe8"], "alt": ["#3a4a5c", "#d6dee6", "#eaedf1"], "tag": "NEW", "fresh": true}, {"id": "I03", "name": "Band Collar Cotton Shirt", "cat": "Blouses", "tags": ["Everyday"], "price": 82, "msrp": 168, "shape": "blouse", "print": "solid", "main": ["#f4f2ef", "#d8d3cb", "#f0efeb"], "alt": ["#2f6b5c", "#d2e6de", "#e8f1ec"], "tag": "NEW", "fresh": true}, {"id": "I04", "name": "Crepe Column Dress", "cat": "Dresses", "tags": ["Occasion"], "price": 150, "msrp": 306, "shape": "dress", "print": "solid", "main": ["#1a1e1c", "#c8ccca", "#ebedec"], "alt": ["#6b3a4a", "#e8d2d8", "#f2eaed"], "tag": "NEW", "fresh": true}, {"id": "I05", "name": "Merino Crew Sweater", "cat": "Knitwear", "tags": ["Everyday"], "price": 104, "msrp": 214, "shape": "cardigan", "print": "solid", "main": ["#8a7a5c", "#e8dfcb", "#f2eee5"], "alt": ["#3a4a5c", "#d6dee6", "#eaedf1"], "tag": "", "fresh": false}, {"id": "I06", "name": "Waffle Knit Cardigan", "cat": "Knitwear", "tags": ["Everyday"], "price": 122, "msrp": 250, "shape": "cardigan", "print": "solid", "main": ["#a8927a", "#eee2d4", "#f3efe9"], "alt": ["#2f6b5c", "#d2e6de", "#e8f1ec"], "tag": "LOW STOCK", "fresh": false}, {"id": "I07", "name": "Twill Pencil Skirt", "cat": "Skirts", "tags": ["Occasion"], "price": 96, "msrp": 198, "shape": "skirt", "print": "check", "main": ["#4a4a44", "#e2e0d8", "#eceae6"], "alt": ["#6b3a4a", "#e8d2d8", "#f2eaed"], "tag": "", "fresh": false}, {"id": "I08", "name": "Trailing Vine Wrap Dress", "cat": "Dresses", "tags": ["Occasion"], "price": 140, "msrp": 286, "shape": "dress", "print": "floral", "main": ["#2f4a5c", "#e6d6b8", "#e9edf0"], "alt": ["#f2ece2", "#2f6b5c", "#f0f4f1"], "tag": "", "fresh": false}, {"id": "I09", "name": "Silk Blend Shell Top", "cat": "Blouses", "tags": ["Occasion"], "price": 80, "msrp": 164, "shape": "blouse", "print": "solid", "main": ["#d8c4b8", "#f4ece6", "#f6f1ed"], "alt": ["#2f3a44", "#ccd4da", "#e9edf0"], "tag": "", "fresh": false}, {"id": "I10", "name": "Linen Utility Jumpsuit", "cat": "Blouses", "tags": ["Everyday"], "price": 136, "msrp": 278, "shape": "jumpsuit", "print": "solid", "main": ["#5c6b5c", "#dce4dc", "#ecefec"], "alt": ["#c4b49a", "#efe7da", "#f3efe8"], "tag": "", "fresh": false}, {"id": "I11", "name": "Fine Stripe Shirt Dress", "cat": "Dresses", "tags": ["Everyday"], "price": 120, "msrp": 246, "shape": "dress", "print": "stripe", "main": ["#3a4a5c", "#f2f4f6", "#eaedf1"], "alt": ["#2f6b5c", "#eef4f1", "#e8f1ec"], "tag": "", "fresh": false}, {"id": "I12", "name": "Rib Knit Camisole", "cat": "Knitwear", "tags": ["Everyday"], "price": 72, "msrp": 148, "shape": "blouse", "print": "solid", "main": ["#c9b8a4", "#f2e9df", "#f5f0ea"], "alt": ["#1a1e1c", "#c8ccca", "#ebedec"], "tag": "", "fresh": false}]};
var PRODUCTS = CFG.products, EDITS = CFG.edits;
PRODUCTS.forEach(function(p,i){ p.img = CFG.imgs[i % CFG.imgs.length];
  p.img2 = CFG.imgs[(i + 7) % CFG.imgs.length]; });
var FREE_SHIP = CFG.freeShip, FLAT_SHIP = CFG.flatShip;
var OPTS = CFG.options, OPTLABEL = CFG.optionLabel;
var CODE10 = CFG.code10, CODE15 = CFG.code15, PREFIX = CFG.prefix;

var TAX = {AL:9.29,AK:0,AZ:8.38,AR:9.45,CA:8.85,CO:7.81,CT:6.35,DE:0,DC:6.00,FL:7.00,GA:7.38,
HI:4.50,ID:6.03,IL:8.86,IN:7.00,IA:6.94,KS:8.78,KY:6.00,LA:10.11,ME:5.50,MD:6.00,MA:6.25,
MI:6.00,MN:8.04,MS:7.06,MO:8.39,MT:0,NE:6.98,NV:8.24,NH:0,NJ:6.60,NM:7.62,NY:8.53,NC:7.00,
ND:7.04,OH:7.24,OK:8.99,OR:0,PA:6.34,RI:7.00,SC:7.50,SD:6.11,TN:9.55,TX:8.20,UT:7.25,VT:6.36,
VA:5.77,WA:9.38,WV:6.57,WI:5.70,WY:5.44};

var uid = 0, picked = {}, cart = [], coupon = null, filter = 'all';
var $ = function(s){ return document.querySelector(s); };
function usd(n){ return '$' + n.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ','); }
function find(id){ for (var i=0;i<PRODUCTS.length;i++) if (PRODUCTS[i].id===id) return PRODUCTS[i]; }

function motif(kind, id, base, tint){
  if (kind === 'stripe')
    return '<pattern id="'+id+'" width="16" height="16" patternUnits="userSpaceOnUse">' +
      '<rect width="16" height="16" fill="'+base+'"/><rect width="16" height="6.5" fill="'+tint+'"/></pattern>';
  if (kind === 'dot')
    return '<pattern id="'+id+'" width="22" height="22" patternUnits="userSpaceOnUse">' +
      '<rect width="22" height="22" fill="'+base+'"/>' +
      '<circle cx="6" cy="6" r="2.9" fill="'+tint+'"/><circle cx="17" cy="17" r="2.9" fill="'+tint+'"/></pattern>';
  if (kind === 'floral')
    return '<pattern id="'+id+'" width="34" height="34" patternUnits="userSpaceOnUse">' +
      '<rect width="34" height="34" fill="'+base+'"/><g fill="'+tint+'" opacity=".92">' +
      '<circle cx="11" cy="6" r="2.4"/><circle cx="16" cy="10" r="2.4"/><circle cx="11" cy="14" r="2.4"/>' +
      '<circle cx="6" cy="10" r="2.4"/><circle cx="28" cy="23" r="2.4"/><circle cx="33" cy="27" r="2.4"/>' +
      '<circle cx="28" cy="31" r="2.4"/><circle cx="23" cy="27" r="2.4"/></g></pattern>';
  if (kind === 'check')
    return '<pattern id="'+id+'" width="20" height="20" patternUnits="userSpaceOnUse">' +
      '<rect width="20" height="20" fill="'+base+'"/><rect width="10" height="20" fill="'+tint+'" opacity=".45"/>' +
      '<rect width="20" height="10" fill="'+tint+'" opacity=".45"/><rect width="10" height="10" fill="'+tint+'" opacity=".55"/></pattern>';
  if (kind === 'grain')
    return '<pattern id="'+id+'" width="8" height="8" patternUnits="userSpaceOnUse">' +
      '<rect width="8" height="8" fill="'+base+'"/><path d="M0,8 L8,0" stroke="'+tint+'" stroke-width="1.6" opacity=".5"/></pattern>';
  return '';
}

/* photo first, hand-drawn SVG sits underneath as a guaranteed fallback */
function art(p, variant, cls){
  var c = variant ? p.alt : p.main;
  var id = 'g' + (++uid);
  var hasPat = p.print && p.print !== 'solid';
  var fill = hasPat ? 'url(#' + id + ')' : c[0];
  var defs = hasPat ? '<defs>' + motif(p.print, id, c[0], c[1]) + '</defs>' : '';
  var svg = '<svg viewBox="0 0 300 400" xmlns="http://www.w3.org/2000/svg" ' +
    'preserveAspectRatio="xMidYMid meet" aria-hidden="true">' + defs +
    '<rect width="300" height="400" fill="' + c[2] + '"/>' +
    '<ellipse cx="150" cy="352" rx="104" ry="15" fill="#000" opacity=".055"/>' +
    SHAPES[p.shape](fill, '#000') + '</svg>';
  var src = 'https://images.unsplash.com/' + (variant ? p.img2 : p.img) +
    '?fm=jpg&q=70&w=800&auto=format&fit=crop';
  return '<div class="ph ' + (cls||'') + '">' + svg +
    '<img src="' + src + '" alt="' + p.name + '" loading="lazy" ' +
    'onerror="this.style.display=\'none\'"></div>';
}

$('#heroArt').insertAdjacentHTML('afterbegin', art(PRODUCTS[0], 0));
$('#editRow').innerHTML = EDITS.map(function(e){
  return '<a class="edit" href="#shop" data-edit="'+e.filter+'">' + art(find(e.pid), 0) + '<span>'+e.label+'</span></a>';
}).join('');
$('#f-state').innerHTML = '<option value="">&mdash;</option>' +
  Object.keys(TAX).sort().map(function(k){ return '<option value="'+k+'">'+k+'</option>'; }).join('');

function cardHTML(p){
  var off = Math.round((p.msrp - p.price) / p.msrp * 100);
  var opts = OPTS.map(function(s){
    return '<button class="opt'+(picked[p.id]===s?' on':'')+'" data-opt="'+s+'" data-p="'+p.id+'">'+s+'</button>';
  }).join('');
  return '<article class="card" data-card="'+p.id+'">' +
    '<div class="shot">' + (p.tag ? '<span class="badge">'+p.tag+'</span>' : '') +
      art(p,0) + art(p,1,'alt') +
      '<div class="swatches"><span class="sw" style="background:'+p.main[0]+'"></span>' +
      '<span class="sw" style="background:'+p.alt[0]+'"></span></div></div>' +
    '<p class="cat">'+p.cat.toUpperCase()+'</p><h3>'+p.name+'</h3>' +
    '<div class="price"><b>'+usd(p.price)+'</b><s>'+usd(p.msrp)+'</s><em>'+off+'% off</em></div>' +
    '<div class="opts">'+opts+'</div>' +
    '<button class="add" data-add="'+p.id+'">Add to '+CFG.bagLc+'</button></article>';
}

function paint(){
  $('#newGrid').innerHTML = PRODUCTS.filter(function(p){ return p.fresh; }).map(cardHTML).join('');
  var list = PRODUCTS.filter(function(p){
    return filter === 'all' || p.cat === filter || (p.tags||[]).indexOf(filter) > -1;
  });
  $('#shopGrid').innerHTML = list.length ? list.map(cardHTML).join('')
    : '<p class="empty-note">Nothing here yet. Try another filter.</p>';
  $('#shownCount').textContent = list.length;
}

document.addEventListener('click', function(e){
  var o = e.target.closest('[data-opt]');
  if (o){
    picked[o.dataset.p] = o.dataset.opt;
    document.querySelectorAll('[data-card="'+o.dataset.p+'"] .opt').forEach(function(b){
      b.classList.toggle('on', b.dataset.opt === o.dataset.opt); });
    return;
  }
  var a = e.target.closest('[data-add]'); if (a){ addToCart(a.dataset.add, a); return; }
  var ed = e.target.closest('[data-edit]'); if (ed){ setFilter(ed.dataset.edit); return; }
  var c = e.target.closest('.chip'); if (c){ setFilter(c.dataset.f); return; }
});

function setFilter(f){
  filter = f;
  document.querySelectorAll('.chip').forEach(function(c){ c.classList.toggle('on', c.dataset.f === f); });
  paint();
}

function addToCart(id, btn){
  var opt = picked[id];
  if (!opt){ toast('Choose a ' + OPTLABEL.toLowerCase() + ' first'); flash(id); return; }
  var hit = null;
  for (var i=0;i<cart.length;i++) if (cart[i].id===id && cart[i].opt===opt) hit = cart[i];
  if (hit) hit.qty++; else cart.push({id:id, opt:opt, qty:1});
  if (btn){
    btn.textContent = 'Added \u2713'; btn.classList.add('done');
    setTimeout(function(){ btn.textContent = 'Add to '+CFG.bagLc; btn.classList.remove('done'); }, 1300);
  }
  toast(find(id).name + ' \u00b7 ' + opt + ' added');
  renderCart();
}
function flash(id){
  var r = document.querySelector('[data-card="'+id+'"] .opts');
  if (r && r.animate) r.animate([{transform:'translateX(0)'},{transform:'translateX(-5px)'},
    {transform:'translateX(5px)'},{transform:'translateX(0)'}],{duration:260});
}

function subtotal(){ return cart.reduce(function(s,l){ return s + find(l.id).price * l.qty; }, 0); }
function discountOf(sub){
  if (coupon === CODE10) return +(sub * 0.10).toFixed(2);
  if (coupon === CODE15) return sub >= 75 ? +(sub * 0.15).toFixed(2) : 0;
  return 0;
}
function shipOf(after){ return !cart.length ? 0 : (after >= FREE_SHIP ? 0 : FLAT_SHIP); }
function taxOf(base, st){ var r = TAX[st]; return r === undefined ? 0 : +(base * r / 100).toFixed(2); }

function renderCart(){
  var body = $('#paneBag');
  $('#count').textContent = cart.reduce(function(s,l){ return s + l.qty; }, 0);
  if (!cart.length){
    body.innerHTML = '<div class="blank"><b>Your '+CFG.bagLc+' is empty</b><p>Pick a '+OPTLABEL.toLowerCase()+
      ' on any item and it lands here.</p><a href="#shop" class="btn btn-line" id="goShop" style="margin-top:22px">'+
      CFG.browseBtn+'</a></div>';
  } else {
    body.innerHTML = cart.map(function(l,i){
      var p = find(l.id);
      return '<div class="line"><div class="thumb">'+art(p,0)+'</div><div><h4>'+p.name+'</h4>'+
        '<p class="meta">'+OPTLABEL+' '+l.opt+' \u00b7 '+usd(p.price)+' each</p>'+
        '<div class="qty"><button data-q="-1" data-i="'+i+'" aria-label="Decrease">\u2212</button>'+
        '<span>'+l.qty+'</span><button data-q="1" data-i="'+i+'" aria-label="Increase">+</button></div>'+
        '<div class="rowend"><b>'+usd(p.price*l.qty)+'</b><button class="rm" data-rm="'+i+'">Remove</button></div>'+
        '</div></div>';
    }).join('');
  }
  var sub = subtotal(), d = discountOf(sub), after = sub - d, ship = shipOf(after);
  $('#sub').textContent = usd(sub);
  $('#discRow').style.display = d ? 'flex' : 'none';
  $('#discLabel').textContent = 'Discount (' + coupon + ')';
  $('#disc').textContent = '\u2013' + usd(d);
  $('#shipCost').textContent = !cart.length ? '\u2014' : (ship === 0 ? 'Free' : usd(ship));
  $('#grand').textContent = usd(after + ship);
  $('#toCheckout').disabled = !cart.length;
  var gap = FREE_SHIP - after;
  $('#shipBar').style.display = cart.length ? 'block' : 'none';
  $('#shipFill').style.width = Math.min(100, after / FREE_SHIP * 100) + '%';
  $('#shipMsg').textContent = gap > 0 ? 'Add ' + usd(gap) + ' more for ' + CFG.freeMsg
                                      : "You've unlocked " + CFG.freeMsg;
  renderCheckoutTotals();
}

function renderCheckoutTotals(){
  var sub = subtotal(), d = discountOf(sub), after = sub - d, ship = shipOf(after);
  var st = $('#f-state').value, tax = st ? taxOf(after + ship, st) : 0;
  $('#c-sub').textContent = usd(sub);
  $('#c-discRow').style.display = d ? 'flex' : 'none';
  $('#c-disc').textContent = '\u2013' + usd(d);
  $('#c-ship').textContent = ship === 0 ? 'Free' : usd(ship);
  $('#c-taxLabel').textContent = st ? 'Sales tax (' + st + ' \u00b7 ' + TAX[st].toFixed(2) + '%)' : 'Sales tax';
  $('#c-tax').textContent = st ? usd(tax) : '\u2014';
  $('#grand2').textContent = usd(after + ship + tax);
}
$('#f-state').addEventListener('change', renderCheckoutTotals);

$('#paneBag').addEventListener('click', function(e){
  var q = e.target.closest('[data-q]');
  if (q){ var i = +q.dataset.i; cart[i].qty += (+q.dataset.q);
    if (cart[i].qty < 1) cart.splice(i,1); renderCart(); return; }
  var r = e.target.closest('[data-rm]');
  if (r){ cart.splice(+r.dataset.rm,1); renderCart(); toast('Removed'); return; }
  if (e.target.id === 'goShop') closeDrawer();
});

$('#applyCpn').addEventListener('click', function(){
  var code = $('#cpn').value.trim().toUpperCase(), msg = $('#cmsg');
  if (!code){ msg.className='cmsg bad'; msg.textContent='Enter a code.'; return; }
  if (code !== CODE10 && code !== CODE15){
    coupon = null; msg.className='cmsg bad'; msg.textContent = code + ' is not a valid code.'; renderCart(); return; }
  if (code === CODE15 && subtotal() < 75){
    coupon = null; msg.className='cmsg bad'; msg.textContent = CODE15 + ' requires a subtotal over $75.00.'; renderCart(); return; }
  coupon = code; msg.className='cmsg good'; msg.textContent = code + ' applied.'; renderCart();
});
$('#cpn').addEventListener('keydown', function(e){ if (e.key === 'Enter') $('#applyCpn').click(); });

$('#f-phone').addEventListener('input', function(){
  var d = this.value.replace(/\D/g,'').slice(0,10);
  this.value = d.length > 6 ? '(' + d.slice(0,3) + ') ' + d.slice(3,6) + '-' + d.slice(6)
             : d.length > 3 ? '(' + d.slice(0,3) + ') ' + d.slice(3)
             : d.length     ? '(' + d : '';
});
$('#f-zip').addEventListener('input', function(){ this.value = this.value.replace(/\D/g,'').slice(0,5); });

function openDrawer(){ $('#drawer').classList.add('on'); $('#scrim').classList.add('on'); document.body.style.overflow='hidden'; }
function closeDrawer(){ $('#drawer').classList.remove('on'); $('#scrim').classList.remove('on'); document.body.style.overflow=''; }
function showPane(w){
  ['paneBag','paneForm','paneDone'].forEach(function(p){ $('#'+p).classList.toggle('on', p === w); });
  $('#bagFoot').style.display = w === 'paneBag' ? 'block' : 'none';
  $('#shipBar').style.display = (w === 'paneBag' && cart.length) ? 'block' : 'none';
  $('#drawerTitle').textContent = w === 'paneBag' ? 'Your ' + CFG.bagLc
    : w === 'paneForm' ? CFG.checkoutTitle : 'Confirmed';
}
$('#openCart').addEventListener('click', function(){ showPane('paneBag'); openDrawer(); });
$('#closeCart').addEventListener('click', closeDrawer);
$('#scrim').addEventListener('click', closeDrawer);
document.addEventListener('keydown', function(e){ if (e.key === 'Escape') closeDrawer(); });
$('#toCheckout').addEventListener('click', function(){ showPane('paneForm'); renderCheckoutTotals(); });
$('#backToBag').addEventListener('click', function(e){ e.preventDefault(); showPane('paneBag'); });
$('#keepShopping').addEventListener('click', function(){ closeDrawer(); showPane('paneBag'); });

function bad(id, ok){ $(id).parentElement.classList.toggle('bad', !ok); return ok; }

$('#placeOrder').addEventListener('click', function(){
  var phone = $('#f-phone').value.replace(/\D/g,'');
  var checks = [
    bad('#f-first', $('#f-first').value.trim().length > 1),
    bad('#f-last',  $('#f-last').value.trim().length > 1),
    bad('#f-email', /^[^\s@]+@[^\s@]+\.[a-z]{2,}$/i.test($('#f-email').value.trim())),
    bad('#f-phone', /^[2-9]\d{9}$/.test(phone)),
    bad('#f-addr',  $('#f-addr').value.trim().length > 4),
    bad('#f-city',  $('#f-city').value.trim().length > 1),
    bad('#f-state', $('#f-state').value !== ''),
    bad('#f-zip',   /^\d{5}$/.test($('#f-zip').value.trim()))
  ];
  if (checks.indexOf(false) > -1){ toast('Check the highlighted fields'); return; }
  var units = cart.reduce(function(s,l){ return s + l.qty; }, 0);
  var sub = subtotal(), d = discountOf(sub), after = sub - d, ship = shipOf(after);
  var st = $('#f-state').value, total = after + ship + taxOf(after + ship, st);
  $('#orderId').textContent = PREFIX + '-' + Math.floor(100000 + Math.random()*900000);
  $('#doneLine').textContent = units + (units === 1 ? ' item' : ' items') + ' \u00b7 ' + usd(total) +
    ' charged \u00b7 ' + CFG.doneVerb + ' ' + $('#f-city').value.trim() + ', ' + st + ' ' + $('#f-zip').value.trim() + '.';
  cart = []; coupon = null;
  $('#cpn').value=''; $('#cmsg').textContent='';
  ['#f-first','#f-last','#f-email','#f-phone','#f-addr','#f-addr2','#f-city','#f-zip'].forEach(function(s){ $(s).value=''; });
  $('#f-state').value = '';
  renderCart(); showPane('paneDone');
});

var tmr;
function toast(m){ var t = $('#toast'); t.textContent = m; t.classList.add('on');
  clearTimeout(tmr); tmr = setTimeout(function(){ t.classList.remove('on'); }, 2100); }

$('#burger').addEventListener('click', function(){ $('#nav').classList.toggle('on'); });
$('#nav').addEventListener('click', function(e){ if (e.target.tagName === 'A') $('#nav').classList.remove('on'); });

paint(); renderCart();
})();
</script>
</body>
</html>
