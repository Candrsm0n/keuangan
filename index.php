<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="theme-color" content="#0b1020"><title>HDLOAD • Media Downloader</title>
<style>
:root{--bg:#090e1b;--panel:#111a2d;--panel2:#17233a;--line:#263650;--txt:#f2f6ff;--muted:#91a1ba;--a:#68a5ff;--b:#44e0c0;--red:#ff718b}
*{box-sizing:border-box}body{margin:0;background:radial-gradient(ellipse at 50% -20%,#244b80 0,transparent 45%),var(--bg);color:var(--txt);font:15px/1.55 Inter,system-ui,Arial,sans-serif}.wrap{max-width:1000px;margin:auto;padding:24px}.top{display:flex;justify-content:space-between;align-items:center;margin-bottom:55px}.brand{display:flex;gap:11px;align-items:center;font-weight:850;letter-spacing:.4px;font-size:20px}.logo{width:42px;height:42px;border-radius:14px;background:linear-gradient(135deg,var(--a),var(--b));display:grid;place-items:center;color:#071322;font-size:23px}.tag{font-size:11px;color:#a8bad2;border:1px solid #354968;padding:6px 10px;border-radius:30px}.hero{text-align:center;max-width:760px;margin:0 auto 30px}.eyebrow{color:var(--b);font-size:12px;font-weight:800;letter-spacing:2px}.hero h1{font-size:clamp(34px,7vw,58px);line-height:1.08;margin:14px 0;background:linear-gradient(100deg,#fff,#a5caff 55%,#6df1d2);background-clip:text;color:transparent}.hero p{color:var(--muted);max-width:610px;margin:0 auto}.card{background:linear-gradient(145deg,#17243a,#10192a);border:1px solid var(--line);border-radius:22px;padding:22px;box-shadow:0 22px 80px #0005}.inputrow{display:flex;gap:10px;margin-top:14px}.url{flex:1;min-width:0;background:#0b1424;border:1px solid #344761;border-radius:13px;padding:16px;color:white;outline:0}.url:focus{border-color:var(--a);box-shadow:0 0 0 3px #68a5ff20}.btn{border:0;border-radius:13px;padding:0 22px;background:linear-gradient(120deg,#70aaff,#43dfc2);color:#071522;font-weight:850;cursor:pointer}.btn:disabled{opacity:.5;cursor:not-allowed}.hint{font-size:12px;color:var(--muted);margin:12px 2px 0}.status{display:none;margin-top:16px;border-radius:13px;background:#0b1424;border:1px solid var(--line);padding:14px}.status.show{display:block}.status strong{display:block;margin-bottom:3px}.status p{margin:0;color:var(--muted);font-size:13px}.result{display:none;margin-top:14px;border:1px solid #2b5361;background:#102b32;border-radius:14px;padding:15px}.result.show{display:block}.result a{color:#85e9d5;font-weight:800}.features{display:grid;grid-template-columns:repeat(3,1fr);gap:13px;margin:20px 0}.feature{border:1px solid var(--line);background:#111a2a;border-radius:16px;padding:17px}.feature b{display:block;margin:8px 0 3px}.feature p{margin:0;color:var(--muted);font-size:12px}.ico{font-size:22px}.section{margin-top:35px}.section h2{font-size:20px}.steps{display:grid;grid-template-columns:repeat(3,1fr);gap:12px}.step{padding:15px;border:1px solid var(--line);border-radius:14px;color:var(--muted);font-size:13px}.step strong{display:block;color:white;margin-bottom:5px}.foot{border-top:1px solid var(--line);margin-top:35px;padding:20px 0;color:#71839c;font-size:11px;text-align:center}.note{background:#2b2414;border:1px solid #68522b;color:#f7dba0;padding:13px;border-radius:13px;font-size:12px;margin-top:15px}.history{margin-top:16px}.history a{color:#9cc5ff;overflow-wrap:anywhere}.smallbtn{background:#243650;color:#dceaff;border:1px solid #38516e;padding:7px 10px;border-radius:9px;cursor:pointer}
@media(max-width:650px){.wrap{padding:16px}.top{margin-bottom:38px}.inputrow{flex-direction:column}.btn{padding:15px}.features,.steps{grid-template-columns:1fr}.card{padding:16px}}
</style>
</head>
<body><div class="wrap">
<header class="top"><div class="brand"><div class="logo">↓</div>HDLOAD</div><span class="tag">SMART MEDIA TOOLS</span></header>
<section class="hero"><div class="eyebrow">FAST • SIMPLE • CLEAN</div><h1>Download media.<br>Keep the quality.</h1><p>Tempel tautan file media yang memang menyediakan akses unduh. HDLOAD akan memeriksa apakah alamat tersebut merupakan file yang bisa diunduh langsung.</p></section>
<main class="card">
 <label for="url"><b>Tempel URL media</b></label>
 <div class="inputrow"><input class="url" id="url" type="url" placeholder="https://example.com/video.mp4" autocomplete="url"><button class="btn" id="go">Periksa Link →</button></div>
 <div class="hint">Mendukung URL file langsung seperti MP4, WebM, MP3, M4A, JPG, PNG, ZIP, dan file lain yang diizinkan server.</div>
 <div class="status" id="status"><strong id="stTitle">Memeriksa link...</strong><p id="stText"></p></div>
 <div class="result" id="result"><b>Link siap dibuka</b><p id="fileInfo"></p><a id="downloadLink" href="#" target="_blank" rel="noopener">Buka / unduh file ↗</a></div>
 <div class="note">Batasan jujur: tautan halaman YouTube, TikTok, Instagram, Facebook, dan situs streaming bukan tautan file langsung. HTML statis tidak dapat mengekstrak media dari semua situs atau mengubah kualitas menjadi HD. Situs dengan DRM, login, token, atau proteksi akses tidak dapat dilewati.</div>
</main>
<div class="features">
 <div class="feature"><div class="ico">⚡</div><b>Pemeriksaan cepat</b><p>Validasi format URL dan cek metadata file jika server mengizinkan.</p></div>
 <div class="feature"><div class="ico">🎞️</div><b>File berkualitas asli</b><p>Unduh file sesuai kualitas yang disediakan sumber, tanpa klaim upscaling palsu.</p></div>
 <div class="feature"><div class="ico">🔒</div><b>Tanpa akun</b><p>Tidak meminta password situs lain atau menyimpan URL ke server.</p></div>
</div>
<section class="section"><h2>Cara menggunakan</h2><div class="steps"><div class="step"><strong>01 · Salin URL</strong>Salin tautan unduhan langsung dari sumber yang sah.</div><div class="step"><strong>02 · Periksa</strong>Tempel URL dan tekan tombol periksa link.</div><div class="step"><strong>03 · Unduh</strong>Jika server mengizinkan akses, buka tautan file untuk mengunduh.</div></div></section>
<section class="section history"><div style="display:flex;justify-content:space-between;align-items:center"><h2>Riwayat pemeriksaan</h2><button class="smallbtn" id="clear">Hapus riwayat</button></div><div id="hist" class="hint">Belum ada pemeriksaan.</div></section>
<footer class="foot">HDLOAD • Gunakan hanya untuk konten milik sendiri atau yang memiliki izin untuk diunduh.</footer>
</div>
<script>
const $=id=>document.getElementById(id);
function show(title,msg){$('status').classList.add('show');$('stTitle').textContent=title;$('stText').textContent=msg}
function validUrl(raw){let u;try{u=new URL(raw)}catch{return null}if(!['http:','https:'].includes(u.protocol))return null;if(u.username||u.password)return null;return u}
function directExt(path){return /\.(mp4|webm|mov|m4v|mp3|m4a|aac|wav|ogg|flac|jpg|jpeg|png|gif|webp|pdf|zip|rar|7z)(?:$)/i.test(path)}
function addHistory(url,state){let h=JSON.parse(localStorage.getItem('hdload_history')||'[]');h.unshift({url,state,at:new Date().toLocaleString('id-ID')});h=h.slice(0,8);localStorage.setItem('hdload_history',JSON.stringify(h));renderHistory()}
function renderHistory(){let h=JSON.parse(localStorage.getItem('hdload_history')||'[]');$('hist').innerHTML=h.length?h.map(x=>`<div style="padding:9px 0;border-bottom:1px solid #263650"><div style="overflow-wrap:anywhere">${x.url.replace(/[<>&"]/g,c=>({'<':'&lt;','>':'&gt;','&':'&amp;','"':'&quot;'}[c]))}</div><span>${x.state} · ${x.at}</span></div>`).join(''):'Belum ada pemeriksaan.'}
async function check(){let raw=$('url').value.trim(),u=validUrl(raw);$('result').classList.remove('show');if(!u){show('URL tidak valid','Masukkan URL http atau https yang benar.');return}
$('go').disabled=true;$('go').textContent='Memeriksa...';show('Memeriksa alamat file...','Mencoba membaca tipe dan ukuran file. Beberapa server memblokir pemeriksaan lintas situs (CORS).');
let state='Belum dapat diverifikasi';try{
 let controller=new AbortController(),timer=setTimeout(()=>controller.abort(),9000),res;
 try{res=await fetch(u.href,{method:'HEAD',mode:'cors',redirect:'follow',signal:controller.signal})}finally{clearTimeout(timer)}
 if(!res.ok)throw Error('Server merespons HTTP '+res.status);
 let type=res.headers.get('content-type')||'Tidak diketahui',size=res.headers.get('content-length'),disp=res.headers.get('content-disposition')||'',isFile=/^(video|audio|image|application\/pdf|application\/zip|application\/octet-stream)/i.test(type)||directExt(u.pathname);
 if(!isFile)throw Error('Alamat merespons, tetapi tidak terdeteksi sebagai file media/unduhan langsung.');
 let sizeText=size? (Number(size)/1048576).toFixed(2)+' MB':'Ukuran tidak diberikan server';
 $('fileInfo').textContent='Tipe: '+type+' · Ukuran: '+sizeText+(disp?' · '+disp:'');
 $('downloadLink').href=u.href;$('downloadLink').download='';$('result').classList.add('show');state='Terdeteksi sebagai file';
 show('Link file terdeteksi','Server mengizinkan pemeriksaan metadata. Tekan “Buka / unduh file” untuk melanjutkan.');
 }catch(e){let reason=e.name==='AbortError'?'Waktu pemeriksaan habis.':e.message.includes('Failed to fetch')?'Server menolak pemeriksaan browser (CORS), atau koneksi tidak tersedia.':'Tidak dapat memastikan file: '+e.message;show('Belum bisa diverifikasi',reason+' Coba buka URL langsung di tab baru. Jika yang terbuka halaman situs, bukan file, gunakan fitur unduh resmi situs tersebut.');}
 addHistory(u.href,state);$('go').disabled=false;$('go').textContent='Periksa Link →';
}
$('go').addEventListener('click',check);$('url').addEventListener('keydown',e=>{if(e.key==='Enter')check()});$('clear').onclick=()=>{localStorage.removeItem('hdload_history');renderHistory()};renderHistory();
</script></body></html>
