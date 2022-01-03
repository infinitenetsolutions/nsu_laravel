$(document).ready(function () {
    setTimeout(function () {
        setTimeout(function () {
            var netaji = "etaji";
            var netaji_str = netaji.split("");
            var el_netaji = document.getElementById('netaji');
            (function animate() {
                netaji_str.length > 0 ? el_netaji.innerHTML += netaji_str.shift() : clearTimeout(running);
                var running = setTimeout(animate, 500);
            })();
        }, 1000);
        setTimeout(function () {
            var subhas = "ubhas";
            var subhas_str = subhas.split("");
            var el_subhas = document.getElementById('subhas');
            (function animate() {
                subhas_str.length > 0 ? el_subhas.innerHTML += subhas_str.shift() : clearTimeout(running);
                var running = setTimeout(animate, 500);
            })();
        }, 3500);
        setTimeout(function () {
            var university = "niversity";
            var university_str = university.split("");
            var el_university = document.getElementById('university');
            (function animate() {
                university_str.length > 0 ? el_university.innerHTML += university_str.shift() : clearTimeout(running);
                var running = setTimeout(animate, 500);
            })();
        }, 6000);
    }, 3000);
});
