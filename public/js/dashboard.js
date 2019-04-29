showFirstContent = function (index) {
    document.querySelector('.router-item').className = document.querySelector('.router-item').className + ' onwork'
    document.querySelector(document.querySelector('.router-item').getAttribute('data-target')).style.display = 'block'
}

setInitialSpannerText = function () {
    document.querySelectorAll('.data-spanner').forEach(function (elem) {
        if (elem.getAttribute('data-span') == 'true') {
            elem.innerHTML = `<p class="text-primary text-uppercase"><span>More</span><br/><span style='transform: rotateZ(-90deg);'>&#10094;</span></p>`
        } else {
            elem.innerHTML = `<p class="text-primary text-uppercase"><span style='transform: rotateZ(90deg);'>&#10094;</span><br/><span>Less</span></p>`
        }
    })
}

document.addEventListener('DOMContentLoaded', function () {
    showFirstContent()
    setInitialSpannerText()

    document.querySelectorAll('.router-item').forEach(function (elem) {
        elem.addEventListener('click', function () {
            document.querySelectorAll('.router-item.onwork').forEach(function (elem) {
                elem.className = elem.className.replace(' onwork', '')
                elem.className = elem.className.replace('onwork', '')
                document.querySelector(elem.getAttribute('data-target')).style = 'none'
            })
            elem.className = elem.className + ' onwork'
            document.querySelector(elem.getAttribute('data-target')).style.display = 'block'
        })
    })

    document.querySelectorAll('.data-spanner').forEach(function (elem) {
        elem.addEventListener('click', function () {
            if (elem.getAttribute('data-span') == 'true') {
                elem.setAttribute('data-span', 'false')
                elem.innerHTML = `<p class="text-primary text-uppercase"><span>More</span><br/><span style='transform: rotateZ(-90deg);'>&#10094;</span></p>`
            } else {
                elem.setAttribute('data-span', 'true')
                elem.innerHTML = `<p class="text-primary text-uppercase"><span style='transform: rotateZ(90deg);'>&#10094;</span><br/><span>Less</span></p>`
            }
        })
    })

    document.querySelectorAll('.user-box .picture, .user-box .name-detail').forEach(function (elem) {
        elem.addEventListener('click', function () {
            toggling = elem.parentElement.parentElement.children
            for (let i = 0; i < toggling.length; i++) {
                if (toggling[i].className.indexOf('other-detail-box') + 1) {
                    if (toggling[i].getAttribute('data-span') == 'true') {
                        toggling[i].setAttribute('data-span', 'false')
                    } else {
                        toggling[i].setAttribute('data-span', 'true')
                    }
                }
            }
        })
    })

    document.querySelector('#main_image').addEventListener('click', function (event) {
        document.querySelector('#main_text').innerHTML = event.target.files[0].name
    })

    document.querySelector('#additional_image').addEventListener('click', function (event) {
        str = ''
        for (let i = 1; i < event.target.files.length; i++) {
            str += ', ' + event.target.files[i].name
        }
        str = event.target.files[0].name + ', ' + str
        document.querySelector('#additional_text').innerHTML = event.target.files[0].name
    })
})
