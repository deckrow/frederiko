var dragParams;
window.addEventListener('load', init_myscroll);
function bardrag_mousemove(e) {
    var pos = (e.clientX - dragParams.clientX) + dragParams.offsetLeft;
    pos = Math.min(Math.max(0, pos), dragParams.maxLeft);
    dragParams.slider.style.left = pos + 'px';
    updateScrollPosition(dragParams.slider, pos);
}
function scrollLeft() {
    var width = window.innerWidth;
    var left = 0;
    if (width > 1140) {
        left = (width - 1140 - 8) / 2;
    } else if (width <= 1140 && width > 768) {
        left = 25;
    } else if (width <= 768 && width > 420) {
        left = 16.5;
    } else {
        left = 7.5;
    }
    return left;
}
function scrollWidth() {
    var width = window.innerWidth;
    if (width > 1140)
        return 1140 + 'px';
    else if (width <= 1140 && width > 768)
        return (width - 65) + 'px';
    else if (width <= 768 && width > 420)
        return (width - 48) + 'px';
    else
        return (width - 30) + 'px';
}
function updateScrollPosition(slider, offsetVal) {
    var bar = slider.parentNode;
    var myscroll = bar.parentNode;
    var maxView = myscroll.scrollWidth - myscroll.offsetWidth;
    var maxSlide = bar.offsetWidth - slider.offsetWidth;
    var viewX = maxView * offsetVal / maxSlide;
    myscroll.scrollLeft = viewX;
    bar.style.left = viewX + scrollLeft() + 'px';
    bar.style.width = scrollWidth();
}
function drag_start(e) {
    var slider = e.target;
    var maxLeft = slider.parentNode.offsetWidth - slider.offsetWidth;
    dragParams = {
        clientX: e.clientX,
        offsetLeft: slider.offsetLeft,
        slider: e.target,
        maxLeft: maxLeft
    };
    e.preventDefault();
    document.addEventListener('mousemove', bardrag_mousemove);
}
function drag_end(e) {
    e.stopPropagation();
    document.removeEventListener('mousemove', bardrag_mousemove);
}
function bar_clicked(e) {
    var bar = e.target;
    var slider = bar.getElementsByClassName('slider')[0];
    if (bar.className === 'h bar') {
        var maxSlide = bar.offsetWidth - slider.offsetWidth;
        var sliderX = e.offsetX - (slider.offsetWidth / 2);
        sliderX = Math.max(0, Math.min(sliderX, maxSlide));
        slider.style.left = sliderX + 'px';
        updateScrollPosition(slider, sliderX);
    }
}
function init_myscroll() {
    var myscrolls = document.getElementsByClassName('reviews-slide');
    for (var i = 0; i < myscrolls.length; i++) {
        var myscroll = myscrolls[i];
        var style = window.getComputedStyle(myscroll);
        if (style.overflowY === 'scroll' || (style.overflowY === 'auto' && myscroll.offsetHeight < myscroll.scrollHeight)) {
            addScroller(false, myscroll);
        }
        if (style.overflowX === 'scroll' || (style.overflowX === 'auto' && myscroll.offsetWidth < myscroll.scrollWidth)) {
            addScroller(true, myscroll);
        }
    }
}
function addScroller(isX, myscroll) {
    myscroll.className += ' myscroll';
    var bar = document.createElement('div');
    var slider = document.createElement('div');
    var offsetDim = isX ? myscroll.offsetWidth : myscroll.offsetHeight;
    var scrollDim = isX ? myscroll.scrollWidth : myscroll.scrollHeight;
    var sliderPx = Math.max(30, (offsetDim * offsetDim / scrollDim));
    slider.style.width = 100 * sliderPx / offsetDim + '%';
    slider.className = 'slider slider-review';
    bar.className = isX ? 'h bar' : 'v bar';
    bar.style.left = scrollLeft() + 'px';
    bar.style.width = scrollWidth();
    bar.appendChild(slider);
    bar.addEventListener('click', bar_clicked);
    myscroll.appendChild(bar);
    slider.addEventListener('mousedown', drag_start);
    slider.addEventListener('mouseup', drag_end);
    bar.addEventListener('mouseup', drag_end);
    document.addEventListener('mouseup', drag_end);
}