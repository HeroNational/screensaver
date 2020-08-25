/*

// Author: Kratos237
// Licence: MIT
// Web site: http:github.com/kratos237/screensaver-screen


*/

document.addEventListener('DOMContentLoaded', function (event) {
    //you can omit this handler
    var bodyId = document.getElementById('main-show') // the id of the main container (body)
    var screensaver = document.getElementById('html') // the id of the screensaver (Clock in this case)
    var mainscreen = document.getElementById('app') // the id of the screen of the main application interface (the user app interface)
    var veilleuse = 1 //the variable which will be increment with the setInterval function
    var sleeptime = 4 // the time for go to sleep

    // Hide the screensaver
    $(screensaver).hide()

    // Can be omissive is to set overflow of the body
    $('body')
        .css({
            overflow: 'hidden',
        })
        .addClass('fadeIn')

    bodyId.style.overflowY = 'show'
    bodyId.style.overflowX = 'show'

    //Initialisation of the clock-timer
    screensaver.W3FClockTimer({})

    // Declaration of the screensaver function
    function veille() {
        setInterval(() => {
            if (veilleuse == sleeptime) {
                $(mainscreen).removeClass('fadeIn').addClass('fadeOut').hide()
                $(screensaver).removeClass('fadeOut').addClass('fadeIn').show()
                $(bodyId).css('background:red')
                veilleuse = 0
            }
            veilleuse++
        }, 1000)
    }

    // Declaration of the function which stop the screensaver
    function sortieVeille() {
        $(screensaver).removeClass('fadeIn').addClass('fadeOut').hide()

        $(mainscreen).removeClass('fadeOut').addClass('fadeIn').show()

        veilleuse = 1
    }
    //Listening to events which stop sleeping
    document.addEventListener('mousemove', () => {
        sortieVeille()
    })

    document.addEventListener('keypress', () => {
        sortieVeille()
    })
    document.addEventListener('keydown', () => {
        sortieVeille()
    })
    document.addEventListener('keyup', () => {
        sortieVeille()
    })
    document.addEventListener('volumechange', () => {
        sortieVeille()
    })

    //Calling to the screensaver function
    veille()
})
