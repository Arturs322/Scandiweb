function myFunction() {
    let x = document.getElementById("productType").value;
    switch (x) {
        case 'DVD':
            document.getElementById("div1").innerHTML = "\n" +
                "                    <label for=\"size\">Size (MB)</label><br>\n" +
                "                    <input type=\"number\" id=\"size\" name=\"size\" placeholder=\"50\" required><br>\n" +
                "                    <p>\n" +
                "                        Please, provide size of the DVD-Disc.\n" +
                "                    </p>\n";
            break;
        case 'Furniture':
            document.getElementById("div1").innerHTML = "\n" +
                "                    <label for=\"height\">Height (CM)</label><br>\n" +
                "                            <input type=\"number\" id=\"height\" name=\"height\" placeholder=\"Height\" required><br>\n\n" +
                "                    <label for=\"width\">Width (CM)</label><br>\n" +
                "                            <input type=\"number\" id=\"width\" name=\"width\" placeholder=\"Width\" required><br>\n\n" +
                "                    <label for=\"length\">Length (CM)</label><br>\n" +
                "                            <input type=\"number\" id=\"length\" name=\"length\" placeholder=\"Length\" required><br>\n\n" +
                "                    <p>\n" +
                "                        Please, provide dimensions in (Height, Width, Length) format.\n" +
                "                    </p>\n";
            break;

        case 'Book':
            document.getElementById("div1").innerHTML = "\n" +
                "                    <label for=\"Book\">Weight (KG)</label><br>\n" +
                "                    <input type=\"number\" id=\"Book\" name=\"Book\" placeholder=\"5\" required><br>\n" +
                "                    <p>\n" +
                "                        Please, provide weight of the book.\n" +
                "                    </p>\n";
            break;
    }
}