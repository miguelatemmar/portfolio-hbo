<!-- profile.blade.php -->
@extends('layout')

@section('title', 'Profiel')


<!-- CODE ANIMATION-->
<div class="code-animation">
        <pre id="typewriter">
            <span class="var-highlight">var</span> <span class="blue">person</span> = [
                name: <span class="orange">'Miguela Temmar'</span>,
                age: <span class="green">20</span>,
                location: <span class="orange">'The Netherlands'</span>,
                current education: <span class="orange">'HBO-ICT @ Middelburg'</span>,
                year: <span class="green">1</span>
            ]; </pre>
</div>

<!-- CODE ANIMATION SCRIPT -->
<script>

    function setupTypewriter(t) {
        var HTML = t.innerHTML;

        t.innerHTML = "";

        var cursorPosition = 0,
            tag = "",
            writingTag = false,
            tagOpen = false,
            typeSpeed = 1,
            tempTypeSpeed = 0;

        /* Type function */
        var type = function() {

            if (writingTag === true) {
                tag += HTML[cursorPosition];
            }

            if (HTML[cursorPosition] === "<") {
                tempTypeSpeed = 0;
                if (tagOpen) {
                    tagOpen = false;
                    writingTag = true;
                } else {
                    tag = "";
                    tagOpen = true;
                    writingTag = true;
                    tag += HTML[cursorPosition];
                }
            }
            if (!writingTag && tagOpen) {
                tag.innerHTML += HTML[cursorPosition];
            }
            if (!writingTag && !tagOpen) {
                if (HTML[cursorPosition] === " ") {
                    tempTypeSpeed = 0;
                }
                else {
                    tempTypeSpeed = (Math.random() * typeSpeed) + 50;
                }
                t.innerHTML += HTML[cursorPosition];
            }
            if (writingTag === true && HTML[cursorPosition] === ">") {
                tempTypeSpeed = (Math.random() * typeSpeed) + 50;
                writingTag = false;
                if (tagOpen) {
                    var newSpan = document.createElement("span");
                    t.appendChild(newSpan);
                    newSpan.innerHTML = tag;
                    tag = newSpan.firstChild;
                }
            }

            cursorPosition += 1;
            if (cursorPosition < HTML.length - 1) {
                setTimeout(type, tempTypeSpeed);
            }

            /* automatically scroll to next line */
            //$('body').scrollTop(1000)

            /* after animation, stop function & stop strolling to bottom */
        };

        return {
            type: type
        };
    }

    var typer = document.getElementById('typewriter');

    typewriter = setupTypewriter(typewriter);
    /* call function when there's something to type ... */
    typewriter.type();
</script>
@section('content')

    <h1>Profiel</h1>
@endsection