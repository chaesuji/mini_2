const seoul = document.querySelector('.seoulb');
const busan = document.querySelector('.busanb');
const daegu = document.querySelector('.daegub');
const incheon = document.querySelector('.incheonb');
const gwangju = document.querySelector('.gwangjub');
const daejeon = document.querySelector('.daejeonb');
const ulsan = document.querySelector('.ulsanb');
const jeju = document.querySelector('.jejub');
const localspan = document.querySelector('.localspan');
const div1 = document.querySelector('.div1');
const div2 = document.querySelector('.div2');
const div3 = document.querySelector('.div3');
const img1 = document.querySelector('.img1');
const img2 = document.querySelector('.img2');
const img3 = document.querySelector('.img3');
const span1 = document.querySelector('.span1');
const span2 = document.querySelector('.span2');
const span3 = document.querySelector('.span3');

seoul.addEventListener('click', () => {
    localspan.innerHTML = '서울';

    img1.setAttribute('src', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSc8freDfwn-HDApbokVYFMvmtS35Xgi-LT5g&usqp=CAU');
    div1.appendChild(img1);
    span1.innerHTML = '석촌호수';
    
    img2.setAttribute('src', 'https://post-phinf.pstatic.net/MjAyMDEwMjlfMjY1/MDAxNjAzOTEyMDAyNzEy.CoVd7ZDxcWRWW70AH22ESwKiOnx6k4WmvsJbJbLo6Pgg.9eSSv7hNX64HnHYkPDQJ-ZhLzDpPUGQUwVhqCVvroKkg.JPEG/%EA%B2%BD%EB%B3%B5%EA%B6%811.jpg?type=w1200')
    div1.appendChild(img1);
    span2.innerHTML = '경복궁';

    img3.setAttribute('src', 'https://a.cdn-hotels.com/gdcs/production19/d1764/0fdc6746-e0a8-4abc-929e-e4a3e237b95b.jpg?impolicy=fcrop&w=1600&h=1066&q=medium');
    div1.appendChild(img1);
    span3.innerHTML = '반포대교';
});

busan.addEventListener('click', () => {
    localspan.innerHTML = '부산';

    img1.setAttribute('src', '/application/view/img/mang2.png');
    div1.appendChild(img1);
    span1.innerHTML = 'manggom';

    img2.setAttribute('src', '/application/view/img/mang2.png');
    div2.appendChild(img1);
    span2.innerHTML = 'manggom';

    img3.setAttribute('src', '/application/view/img/mang2.png');
    div3.appendChild(img1);
    span3.innerHTML = 'manggom';
});

daegu.addEventListener('click', () => {
    localspan.innerHTML = '대구';

    img1.setAttribute('src', '/application/view/img/mang2.png');
    div1.appendChild(img1);
    span1.innerHTML = 'manggom';

    img2.setAttribute('src', '/application/view/img/mang2.png');
    div2.appendChild(img1);
    span2.innerHTML = 'manggom';

    img3.setAttribute('src', '/application/view/img/mang2.png');
    div3.appendChild(img1);
    span3.innerHTML = 'manggom';
});

incheon.addEventListener('click', () => {
    localspan.innerHTML = '인천';

    img1.setAttribute('src', '/application/view/img/mang2.png');
    div1.appendChild(img1);
    span1.innerHTML = 'manggom';

    img2.setAttribute('src', '/application/view/img/mang2.png');
    div2.appendChild(img1);
    span2.innerHTML = 'manggom';

    img3.setAttribute('src', '/application/view/img/mang2.png');
    div3.appendChild(img1);
    span3.innerHTML = 'manggom';
});

gwangju.addEventListener('click', () => {
    localspan.innerHTML = '광주';

    img1.setAttribute('src', '/application/view/img/mang2.png');
    div1.appendChild(img1);
    span1.innerHTML = 'manggom';

    img2.setAttribute('src', '/application/view/img/mang2.png');
    div2.appendChild(img1);
    span2.innerHTML = 'manggom';

    img3.setAttribute('src', '/application/view/img/mang2.png');
    div3.appendChild(img1);
    span3.innerHTML = 'manggom';
});

daejeon.addEventListener('click', () => {
    localspan.innerHTML = '대전';

    img1.setAttribute('src', '/application/view/img/mang2.png');
    div1.appendChild(img1);
    span1.innerHTML = 'manggom';

    img2.setAttribute('src', '/application/view/img/mang2.png');
    div2.appendChild(img1);
    span2.innerHTML = 'manggom';

    img3.setAttribute('src', '/application/view/img/mang2.png');
    div3.appendChild(img1);
    span3.innerHTML = 'manggom';
});

ulsan.addEventListener('click', () => {
    localspan.innerHTML = '울산';

    img1.setAttribute('src', '/application/view/img/mang2.png');
    div1.appendChild(img1);
    span1.innerHTML = 'manggom';

    img2.setAttribute('src', '/application/view/img/mang2.png');
    div2.appendChild(img1);
    span2.innerHTML = 'manggom';

    img3.setAttribute('src', '/application/view/img/mang2.png');
    div3.appendChild(img1);
    span3.innerHTML = 'manggom';
});

jeju.addEventListener('click', () => {
    localspan.innerHTML = '제주';

    img1.setAttribute('src', '/application/view/img/mang2.png');
    div1.appendChild(img1);
    span1.innerHTML = 'manggom';

    img2.setAttribute('src', '/application/view/img/mang2.png');
    div2.appendChild(img1);
    span2.innerHTML = 'manggom';

    img3.setAttribute('src', '/application/view/img/mang2.png');
    div3.appendChild(img1);
    span3.innerHTML = 'manggom';
});
