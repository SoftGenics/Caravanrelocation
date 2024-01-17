<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>
<body>
    <input type="text" id="tags" placeholder="Enter your title">
    
    <script>
        // Define your autocomplete suggestions in the availableTags variable.
        var availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];
        
        // Initialize autocomplete when the document is ready.
        $(document).ready(function() {
            $( "#tags" ).autocomplete({
                source: availableTags
            });
        });
    </script>
</body>
</html>
