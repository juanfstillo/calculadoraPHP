<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Calculadora en PHP</title>
  </head>
  <body>
    <h1 class= 'display-2 text-center'>Calculadora en PHP</h1>
    <div class="text-center">
         <img src="https://www.anerbarrena.com/wp-content/uploads/2016/05/logo-programacion.jpg" class="rounded" alt="...">
         <h4 class= 'display-2 text-center'>Resultado</h4>
    </div>
    <div class="container">
  <div class="row justify-content-md-center">
    <div class="col-12">
    </div>
    <?php


  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  $op = $_POST['operacion'];

switch ($op) {
    case "suma":
        $n =  $n1 + $n2;
        break;
    case "resta":
        $n = $n1 - $n2;
        break;
    case "multiplicacion":
        $n = $n1 * $n2;
        break;
    case "division":
        $n = $n1 / $n2;
        break;
    default:
        echo "Error";
        break;
    
}

?>

<h1 class= 'display-3 text-center'><?=  $n ?></h1> <br>
        <div class="col-12">
<div class="text-center">
         <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUWFRgWFhUYGRgaGhoaGBoYGBgYGBoYGBgZGRgYGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QGhISHjQhISE0NDQ0NDQ0NDQxMTQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NTQ0ND8/MTQ/NDQ0Pz80NDQ0Mf/AABEIAMEBBQMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAAECAwUGB//EADwQAAIBAgMFBgMHAgUFAAAAAAECAAMRBCExBRJBUXEiMmGBkbEGocEjM0JSYnLwE4IUktHh8Qc0Y6Ky/8QAGQEAAwEBAQAAAAAAAAAAAAAAAQIDAAQF/8QAIBEBAQEBAAMBAAMBAQAAAAAAAAECEQMhMRIiMkEEUf/aAAwDAQACEQMRAD8A86bajXzXWRO0fCaTotzdRlHaih/CItoMtdoqDneEDaKeMBSiDUImomzkIHZmrGGOTnHGPT80TbMp2vY8tY1TYyDK555nhB2Md8Yn5oKKgJuOcevstQMmMGwv1mYYZUdZa0qVbmAT1Twlwp93pKqii6+Jl5ezAeBg6CtR2hL64yEoTNoTV4QVl2HGQmlhk0gVHSamDWS3eHgiulkhVL7k9IPiR2YRT+5PSVxPSevrLxHdXzicZr0WPX7q+cT6j+2XiSNEZt5wSoPtU6n2hlL8X84wQj7VOpieT+p8fWukmVkUaYe2dulGKKtv1Xz8hOKZuq6ett5FjacG20XYgl2BBuMz7RYzaDuxJY8rXIGXhHniofp3F75ix84xE4TC4+ohurEWPUGdRsvbK1SFIs+dxwy5Ta8eo000GWRKx6lVV1NoO20KY1a3lkOsE8W78jfvP/qbLINLrg2I4i4PMHjK2EnZZ9H1VJEUmVijdbkZzpcn90WkKVbl+oteU4tCBOnvtFi0PvT5zXTSY2H+89Zv0EuAY1rRFtB1HvJ19T5SLaecsdb73UfWL2MGxB7J6TFwY95t4kdk9Jh4P6xmHNKQdTLDrIoNRAy5gDu9YnHaB8DJW0j2itYroDtQlxpKaAzlmIe1ufAQdaQdhkvaa+HSwGU52hSqNnvlfBcvXnCsNVxKZntpyYC/kZPXKpM3jexHdl4IFEzP/wASHphlPGxB1B5GFsfsTL4+I7vKz8Qe50PtHYdr09pXWbtKP0yTN2vP2ErKmVE6wWn96vnCafGUUBesOhibvo+J2hPiTFNYILgcbTmne5znX7YwoZWY6gZTjXGpkcL6I7olLPeM0YWEsQ5M6D4LfCpiA+JZlRQSgAJVn5ORmBOdaWUnnX/yeLHk3zd5CW16xh/izDviKeHwmGDl3Cl2UIAv4iBa5sATnBf+opoq6hFVW3WL2AF1uQtxMr4IqUqKviWIerYrTprmRfVn4LfTMytsM9Wq1auQzE3CDui2lzxtllOn/ovh8OrM3siVxdf4fZaMtFA2tibclJuo9ISRJEGMZ4Pl1Na7HXicisxR92KIboNHNszK8Q91v/LS1EylDr2PIzpl9pMPDj7Q+c3qL2UDkJhYTOp6zbQG9rX7MNLPpVGzEvpvl/L9YPUGfpLkUhb24H5wGU4s3U25TEwennNrFiyX/TMXBnLzjz4AljnFQOZjNqIqJzi9ZcxzEtkN2TWL1jUdYbgqSl+3nYZCBUO9HxClWRwcibHnrrF18Pj663DVKajJLmC4x2YZAAePCYVba7Id1AotrcXJluI/q1aIcHO+a6Zc5H811yw+ErWqMlwQ63HEby/8zoamVGcjh8M6Wdssxb6zrMV9yOs6MX/HH5s+2ZiB2hn+ED2j8fMyNU3f+0e8ke8fOWjnTpaGU4X73+36yyn3ZDBj7U/t+sTyfFMfV2Pe6lLd4EX4DKcNiqTIxBnobUQwz6zlviSiN5bSPj1x03PYwqeGd+6L+n1lDqQc5r4OiA63FwTbplrAceoDtbS8vnXSXPIDjxNIiOm6r4UqqFdSw3mYEDmAJ0QM4bZYNyVNrclJOfAcp266DpOXz+1MpXkGkhIznhqhGjxRg4opDsjpf6Sqov2XkfeJHYADLQfWSrf9vf8AT9TLZ/sSub2eftfWblNxvG/KYGCPbPnNLf48xnKUBmIbP0l74oKAtjcqOmkzlckiagQbpJAvYWNvCCsH2kPsx+2c2j2TznQ4923CLZBRY+Wc52gt1t4x58AXRa4BltEZymkLAectpnOLRgm8dIyx5OjT4YZmaVOijAh9QCynxHC8z8IMzDCMxGs7AzeXqmliKRX7RAXXTn4dY2I2y6ru7qneGdjoOAtwlW26e4wdeI7Q6cZDC4qgybrjdPEqMz1i/l0Z1LFCVWNjna4y8SeE7HHtainW05RaqF0VM1DDXjOh21UtRT90bP1Hy0ITd7eAz89JYpzJ6wTDPnCVbXpLxy1YvdkMB943gBJr3ZHZx7b+UTy30r4x9ZCVAHMTn9oWYlWyI5+86dDlMT4loDcDjUGxM48/XXKxRidxGAzJyHh0mJVHPWalJCxAg+Jw9mnRi8DU7GY0nTpFrAcZc+GPKWUEAIvpeW/c4j+W38M0WV3B4Bc+Gs6ICZeysYjncRCptc3tn/LzUBnL5b2nzOFeQvHJkZIxRRXihAAaYcWvbh6Ex3TdoAb1zn7wBcYcj/TfK/4eZJkMRiju23KgFvxLbXOdGc3qbPwC3q26zdoYNS7XOQUETmaVQhrjOaq4xxmKbnK2mWUfgNHEUApFvCWpRIDMWy3dL6Ei4mTX2m2W8jDQZ5aS5Mez6UnIICjdz4WFoLKwrGp9kbZndmTgcISNDryhy1WJK7pXdyO9kfMTTwzKvWDp85lZy4MKO1BnIBymltHFK2kyWzMEGyCEk30ldNuZju2gm4Ez30ZKpXMR3xjm30lb8oyre0rM+l54cyLKVZdH4/i4/wB0HxeB3Tdc1Ols4iLSgpyJHQn2iXNG458JX3fCFV9svUREYDsnJhkT18YAmHZmC3OZtz1m7h9mYcHdvUqNxy3Qtjn1g9Z+p3x/pRgao5zRQ69JVtHZFNBdH3DyYwfA4km6nMjlyhzvqO/BZ7ainsxtlntv5SKv2YtnZFz4gTeX3CYnK2VkXUEWIBHI5yFKpfe8DaKpUABJNgNZx8vXSAxez0HbRQpBubaEccoNSwoObceE0qtc91Re/pY5yv8Ap25Fj6AczH5XT4vH36AxWDUD2H+0yK+GPBT55fKdM4VR48SZmVzHl4rrxTgPY7BHO9lcWF+c37znMRzh2y8dcbjajunn4RdS1x6zZWpFGEbeiEp4o29FDwD0E3lS2R3W87O1vSZeJUlGBOXa95rYZCNw/oY/+7CZ9Zb0mP7veXmvafHNYBL1QOs3qVIliL/hmLs8faX6zfwzdtv2j3j61wJOszbCWBF9LR9lAtTcXyHsRLNpUyQQTcn6SjYb5VF/SG9DNm9jIiqVJknxpOQg1c5mVEHhNwejGJ5wdnIju4VQL55XglareH8jNChXhNGoTAETIHidOkMw5gUx9XMLnKVU3zPhJOSIK72PWU66OimaVMZKmjtbdUnoJp4bYlxvVWt+ldfWJreY3en2Gm7vVWuAAVXK/aOuXSawxFlvkCRcDkD9TBhiFQblMBVt18+sFx+KXcXPM5mcu9fq+jzhYvEpe4Xffiz5qOnCZtIk1GYWOWZUWUeErr4jeyvly4QzY2EFRyGJCAaLl85TE4l5L0cj5S7Zwvc8m+ghmL2Oqgf02JuO6+ptyaBbPyB/cb/KU1rscmc2Ufhj3vFvYSG0KoWm5IuLe+UWGPZN/wAx4TO2ohd0UnsDNhzN8hIZ+r4naL2ZXLopUEZbuYzIXK/SE1Et/OMhhnAU2Fhf25SuvV/nWM9DHqKal+MCrMCJbWfevY6a/wCkzzVs27xmja0qxD9mCioQwI6xqr9sjnKS97ekf8uPyX27CjU3lB5i8kYLs57006Qm8hqcqFImKNFN0ozDDsJx7L//AG0zMebUT1b3luBrd4DVbjPxc6TB27WO8ADldpXOe6APs/v+f0M2sMbMegnPYV7MJ12xtkVsQw3Fsm6N52yUf6nwEprIRm47vTJ2W9nbxRxPR1+B95gWrHoq/UwvB/AeDQ3ZXdzoWcgdLLaHOeQLXkdZmBIYZxjiDPV9q/DFN2LKoB03TwAFhY8rTj9ofDO4e4R00jNxyjOSY6reab7JI0MrOBcDS8F0aZDoNIfgKe++6ORJ8BBqScPGF4Jd2oGvkez5SdqueRorgKa5sxPhpGKUh3UW/M5+8fE1lmZVxfKS7qq2tB8cy90AdIJV2i5yJgD4gnjIrHmO/W61cNTeobgHcuAzcAOI6wbbQUOd3IcOk2/hykTSYt3N6/nbOYO3mUOQuk2Z/Lja9Rl7+c6v4XxANxx+c49VOomxsGswckC5IsOstrKM07rF41QrMwIABtvAi54Ac5hCuUS9s+P7jG+IcZZae8fxA+Q8OsFFbfXIyep6X8czWsmKBy0PvA8RX3nVB+EbzfQQB693VBqDc+AtpIYSuWLniRY+tosz6U5JfTRp1y2hy0Hjc5mM9ayknQBj6GwkKYsLDQZQbGtam1v5nNz2r30g9UqLA+J6mC1Xud4cLXkmqCwz4TOdipB5xs5R1pfiDZwekHJz8zJ4p7lT4SgnOUk9IavXV7IP2Q6mG3gWyD9kvU+8MnLv6nTRRRQcKFwbEkW5tc+AaY+3VYOLjmfWbuDAV2Bsd0Xvb8xj16BxBRFtvEm5/KPzHwEvn+xOsr4X2M2KqcRTSxqPpYflU/mM9ZouFAVBuoo3VUaADSZuCw6Uaa0aYAVNebMe8zHiTLjUtLNxoHFER0xqsL5giZjYi2fDjKq7EdpT/uItppGnUxQJ1vBMQN7h/vAzUBzGR4wnD4jXMef0gvsZ6Z1TZqOc0F+YyguM2EvAgToDXUXJHS2fnBXxKHiDFsHrjMbspl4eY0mDjX3Mr58Os77G1ix3VpX9bXMLw+yEKn+pTpknUboyHWaT37B5U+Ja1je8GNQ856HtP4ZwpVyisGtZe2d0N/pOKrbExCGxpORzVSR6iUkg9oNXmvsPZdbEvu00LAd5vwqPFufhBtk7Eq16yUgjKWObMpAVR3mN+QnsmzaVKhSWjSUhFGZ3Td24sx4kxr8Gacpi8I9CkF3CFAzPDxnn+03uxM9qxTKykag6jWeRfFeGVK53MlOYksZ/l02tdgLAKM78oXUZkzXLpKtmoDDsXTG5BrV/QZnqszFVnexYk2+UWGxJUjXpL6QsJq0MKjKLoL6343jWwM6vQuGxgIZf6aj9QJ3r8byOy1Pa8vWTr1AgewGXzJ1j7OcsrEjiALQXnHVgdBsSLoZazQXE1bKTJ/6pbyMp785VVqX3ZbcEQQy+Y5dX2vqtmJXfOJjpIrCTrrdl5Ul84VvQXZp+yTpL5yb/ALBU7x5C8aKUPiKlmY/+Me82vhR1LMAO0xVdMwoBLZ+MwMSO0ORFr+0twONqUVJSwbI3IuORtOrnsjuMS5VvA5wdsRMqlt/fAWotmt3hofKXioOBuIemkGmpJUqu72Tmp08IAlXdN9RxhNwR2Tl7QCtbIm2kg0rLmVNXtMwxKnjlHq7hGg9JmtiPGV1cTlrMzRXHpS1YkXvu+MDxO3GqsAq7q6TPChjcwkVqaC7EeEDC9pOEw5IN72Vee82p9JKjtTcXXgPlac1tXau/uoO6Dfzg3+MJg6PHeVNqDM30Cn1AJk8RtAkKQxG9qL8RkZwZxhCNzci/gq8JJtom65nsg+pN4ejxqYvadRGd9+6ZAAc72M5DbdYs5ub2lmJxmTC/ebe6Z3mdVe5ueMfM4XWh+zWhWJfKZmEezQuo9xJ7n8jZvoqfdPSbeHHY8pg0DqJ0FDuiChn6yWw7MGF9X+UPw9EIlhzlOMYIpF+0TcecLfLLkB8hN307MRQzZwDHHIwxjAsacjNn6OvjLDSCxzGSXjjtJjHHCMZJZmdZs/7pOkug+Bypp0ll5yb+hpZFK96PEByJqv8AmPrD9lOSzAknsn5TOtD9k95v2H6Tu1PSf+ugwiAgGaCVABaZeFq2W3ImT/xEmo10rC+tvaXJVAvMRMVLWxAmDrWfECBVngJxMsTGsPykciIBS/q+MpqVTJviaZ1BQ8+8vnbSDVKbWupDjmpv8tZrWV1nbgYG5Y6kmTerzlbPEtZC8eJVlNYNwNvrGzm1v1xKrVtBXr8pVV3gcwZFfSPM8H9Swzm8ZhpJqtzGqLnblHhKspawrhBqQz8oSgyMnqexlV0e9Ogwx0/nKc/R703sKcomlfFPaTqu9mAesjVbWXVRnBKzwOz4pcwPEm4hBe8FxOkM+p716Z7C0jJVNZAy8cl+nVZICKnJ01vBazpsN3E/aJZIrkF6D2j3nNr61pooifGKLwHKQ7ZK3cjmjfICWNSF9BCMM6pc2FypF+V513UJJ/qdEnOSvLdnMnb3752sRwtDxs0sLoVYcwfpEH6zt6OXltfAOvAwVlN5hkIvG/qStjImYUmcyknO4yPMZSZkGi1k2rscixPXORMiJKKxg9uMZmjOQcuMrR7GxnRiJ1Kpijpl6Sh2J4/KEJu30lu4OG7GsDvASJK6puxMOZfPyme+pi2Ctpaw10ssDoa38IQ1a4k6fOVWH7385zcptugTFww7c1zygsX8M9rWq38oBiqmUI37IfEzPxJg4vrRlaV4h8o6HODYk5w5ntLWlDRWikqS5yrn/wBStaWYYXYDmR7yFSE7LW9Ret/SLfg1vuc7cpEmSc535yoznv0D2iiMUzMsYc3zYyYoDxlgOcV5Yi7B0xpLThXU3R/QyikpOWt+A1hKbOYi6MehyI8pvYwTR2lVXJ13hLGxNB++rIekGGFrrnuk/OMcQR95SbyyMHBh3wlL8NU/5SZS+ByuGuP2NLlr0P1jwyMrrV6X4abseZbd9oRBthz/AAEe8T4UgXYgDx1PSJ8Q/wCFETotz/ma8GqKxzYknxMF4yTMBpIgmREcHIxfjA6xzuJUasd2zkSmV5eJ06PnnD6da+i+pgVKn0haUgOBh6HFrsf+IBUHaMKsIPVGZmow6NlJb0rWSIicNLwZs1e0T4QysxF2tkBYngCdBK9kUt7LS5HpOh2hQQ0twDLvdSvEwcWxrjBdwSF4KvzMArnOWoWa55nOCvUFzB+VNalWIReB1Xu0tDZGURsziOqYCW05XeSWGliTQvZPfHnBHheyu+D4GLr4zYLExiZFnjM0jxkywjSgtFCykxCKKWTTpd9Os38L3jFFMLQpyjH6DrFFMaMGrqZVWiiiiiNZDFx4oGBxcIooK1Z7anrLV7sUUvEyXUQp+EUUDK2lNTWKKFjJrJmKKKzS2ZqJvU+76x4plc/GJV7jdTMNoophO2khFFDC6KWLFFAxjL8H3vWNFBfjRqDQdJZFFJMjFFFMz//Z" class="rounded" alt="...">
            <p class ='text-center h4'><em>Adiós y buena suerte</p>
        </div>
    </div>



    </div>
    </div>


    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>