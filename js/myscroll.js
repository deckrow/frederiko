var dragParams;
window.addEventListener('load', init_myscroll);
function bardrag_mousemove(e) {
    var pos;
    if (dragParams.slider.className === 'slider') {
        pos = (e.clientX - dragParams.clientX) + dragParams.offsetLeft;
        pos = Math.min(Math.max(0, pos), dragParams.maxLeft);
        dragParams.slider.style.left = pos + 'px';
        updateScrollPosition(dragParams.slider, pos);
    } else if (dragParams.slider.className === 'review-view') {
        var myscroll = dragParams.slider.parentNode;
        var bar = myscroll.lastChild;
        var slider = bar.lastChild;
        pos = ((e.clientX - dragParams.clientX) + dragParams.offsetLeft) * -1;
        if(pos < 0) {
            pos = 0;
        } else if (pos > dragParams.maxLeft) {
            pos = dragParams.maxLeft;
        }
        slider.style.left = pos + 'px';
        updateScrollPosition(dragParams.slider, pos);
    }
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
    var bar, myscroll, maxView, maxSlide, viewX, sliderbar;
    if (slider.className === 'slider') {
        bar = slider.parentNode;
        myscroll = bar.parentNode;
        maxView = myscroll.scrollWidth - myscroll.offsetWidth;
        maxSlide = bar.offsetWidth - slider.offsetWidth;
        viewX = maxView * offsetVal / maxSlide;
        myscroll.scrollLeft = viewX;
        bar.style.left = viewX + scrollLeft() + 'px';
        bar.style.width = scrollWidth();
    } else if (slider.className === 'review-view') {
        myscroll = slider.parentNode;
        bar = myscroll.lastChild;
        sliderbar = bar.lastChild;
        maxView = myscroll.scrollWidth - myscroll.offsetWidth;
        maxSlide = bar.offsetWidth - sliderbar.offsetWidth;
        viewX = maxView * offsetVal / maxSlide;
        myscroll.scrollLeft = viewX;
        bar.style.left = viewX + scrollLeft() + 'px';
        bar.style.width = scrollWidth();
    }
}
function drag_start(e) {
    var slider = e.target;
    var myscroll = slider.parentNode;
    var bar = myscroll.lastChild;
    var sliderBar = bar.lastChild;
    var maxLeft = slider.parentNode.offsetWidth - slider.offsetWidth;
    if (slider.className === 'slider') {
        dragParams = {
            clientX: e.clientX,
            offsetLeft: slider.offsetLeft,
            slider: e.target,
            maxLeft: maxLeft
        };
        e.preventDefault();
        document.addEventListener('mousemove', bardrag_mousemove);
    } else if (slider.className === 'review-view') {
        var maxLeft = bar.offsetWidth - sliderBar.offsetWidth;
        dragParams = {
            clientX: e.clientX,
            offsetLeft: -bar.lastChild.offsetLeft,
            slider: e.target,
            maxLeft: Math.abs(maxLeft)
        };
        e.preventDefault();
        document.addEventListener('mousemove', bardrag_mousemove);
    }
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
    slider.className = 'slider';
    bar.className = isX ? 'h bar' : 'v bar';
    bar.style.left = scrollLeft() + 'px';
    bar.style.width = scrollWidth();
    bar.appendChild(slider);
    bar.addEventListener('click', bar_clicked);
    myscroll.appendChild(bar);
    myscroll.addEventListener('mousedown', drag_start);
    myscroll.addEventListener('mouseup', drag_end);
    slider.addEventListener('mousedown', drag_start);
    slider.addEventListener('mouseup', drag_end);
    bar.addEventListener('mouseup', drag_end);
    document.addEventListener('mouseup', drag_end);
}