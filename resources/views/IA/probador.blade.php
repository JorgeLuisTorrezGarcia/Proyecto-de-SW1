<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PROBADOR IA</title>
  </head>
  <body>
    <div>
      <main>
        <div
          class="SVELTE_HYDRATER contents"
          data-target="SpacePageInner"
        >
          <iframe
            src="https://chrisjohnson111-test4.hf.space"
            class="w-full h-[1200px]"
            aria-label="Playground"
            style="overflow: hidden; height: 4988px; width: 100%;"
          ></iframe>
        </div>
      </main>
    </div>

    <script>
      import("/front/build/kube-7f33475/index.js");
      window.moonSha = "kube-7f33475/";
    </script>

    <!-- Stripe -->
    <script>
      if (["hf.co", "huggingface.co"].includes(window.location.hostname)) {
        const script = document.createElement("script");
        script.src = "https://js.stripe.com/v3/";
        script.async = true;
        document.head.appendChild(script);
      }
    </script>

    <script
      src="chrome-extension://okkffdhbfplmbjblhgapnchjinanmnij/content/sm.js"
      data-pname="recorder-screenshot-v3"
      data-asset-path="chrome-extension://okkffdhbfplmbjblhgapnchjinanmnij/"
    ></script>
    <iframe
      name="__privateStripeMetricsController1450"
      frameborder="0"
      allowtransparency="true"
      scrolling="no"
      role="presentation"
      allow="payment *"
      src="https://js.stripe.com/v3/m-outer-3437aaddcdf6922d623e172c2d6f9278.html#url=https%3A%2F%2Fhuggingface.co%2Fspaces%2FHumanAIGC%2FOutfitAnyone&amp;title=OutfitAnyone%20-%20a%20Hugging%20Face%20Space%20by%20HumanAIGC&amp;referrer=&amp;muid=af307710-c78d-4ed3-9adc-e5be6b857a1f0c2e17&amp;sid=NA&amp;version=6&amp;preview=false"
      aria-hidden="true"
      tabindex="-1"
      style="
        border: none !important;
        margin: 0px !important;
        padding: 0px !important;
        width: 1px !important;
        min-width: 100% !important;
        overflow: hidden !important;
        display: block !important;
        visibility: hidden !important;
        position: fixed !important;
        height: 1px !important;
        pointer-events: none !important;
        user-select: none !important;
      "
    ></iframe>
    <div id="screenity-ui">
      <div class="screenity-shadow-dom">
        <div>
          <div class="screenity-scrollbar"></div>
          <div class="screenity-scrollbar"></div>
        </div>
        <style type="text/css">
          			#screenity-ui, #screenity-ui div {
          				background-color: unset;
          				padding: unset;
          				width: unset;
          				box-shadow: unset;
          				display: unset;
          				margin: unset;
          				border-radius: unset;
          			}
          			.screenity-outline {
          				position: absolute;
          				z-index: 99999999999;
          				border: 2px solid #3080F8;
          				outline-offset: -2px;
          				pointer-events: none;
          				border-radius: 5px!important;
          			}
          		.screenity-blur {
          			filter: blur(10px)!important;
          		}
          			.screenity-shadow-dom * {
          				transition: unset;
          			}
          			.screenity-shadow-dom .TooltipContent {
            border-radius: 30px!important;
          	background-color: #29292F!important;
            padding: 10px 15px!important;
            font-size: 12px;
          	margin-bottom: 10px!important;
          	bottom: 100px;
            line-height: 1;
          	font-family: 'Satoshi-Medium', sans-serif;
          	z-index: 99999999!important;
            color: #FFF;
            box-shadow: hsl(206 22% 7% / 35%) 0px 10px 38px -10px, hsl(206 22% 7% / 20%) 0px 10px 20px -15px!important;
            user-select: none;
          	transition: opacity 0.3 ease-in-out;
            will-change: transform, opacity;
          	animation-duration: 400ms;
            animation-timing-function: cubic-bezier(0.16, 1, 0.3, 1);
            will-change: transform, opacity;
          }

          .screenity-shadow-dom .hide-tooltip {
          	display: none!important;
          }

          .screenity-shadow-dom .tooltip-tall {
          	margin-bottom: 20px;
          }

          .screenity-shadow-dom .tooltip-small {
          	margin-bottom: 5px;
          }

          .screenity-shadow-dom .TooltipContent[data-state='delayed-open'][data-side='top'] {
          	animation-name: slideDownAndFade;
          }
          .screenity-shadow-dom .TooltipContent[data-state='delayed-open'][data-side='right'] {
            animation-name: slideLeftAndFade;
          }
          .screenity-shadow-dom.TooltipContent[data-state='delayed-open'][data-side='bottom'] {
            animation-name: slideUpAndFade;
          }
          .screenity-shadow-dom.TooltipContent[data-state='delayed-open'][data-side='left'] {
            animation-name: slideRightAndFade;
          }

          @keyframes slideUpAndFade {
            from {
              opacity: 0;
              transform: translateY(2px);
            }
            to {
              opacity: 1;
              transform: translateY(0);
            }
          }

          @keyframes slideRightAndFade {
            from {
              opacity: 0;
              transform: translateX(-2px);
            }
            to {
              opacity: 1;
              transform: translateX(0);
            }
          }

          @keyframes slideDownAndFade {
            from {
              opacity: 0;
              transform: translateY(-2px);
            }
            to {
              opacity: 1;
              transform: translateY(0);
            }
          }

          @keyframes slideLeftAndFade {
            from {
              opacity: 0;
              transform: translateX(2px);
            }
            to {
              opacity: 1;
              transform: translateX(0);
            }
          }

          #screenity-ui [data-radix-popper-content-wrapper] { z-index: 999999999999!important; }

          .screenity-shadow-dom .CanvasContainer {
          	position: fixed;
          	pointer-events: all!important;
          	top: 0px!important;
          	left: 0px!important;
          	z-index: 99999999999!important;
          }
          .screenity-shadow-dom .canvas {
          	position: fixed;
          	top: 0px!important;
          	left: 0px!important;
          	z-index: 99999999999!important;
          	background: transparent!important;
          }
          .screenity-shadow-dom .canvas-container {
          	top: 0px!important;
          	left: 0px!important;
          	z-index: 99999999999;
          	position: fixed!important;
          	background: transparent!important;
          }

          .ScreenityDropdownMenuContent {
          	z-index: 99999999999!important;
            min-width: 200px;
            background-color: white;
            margin-top: 4px;
            margin-right: 8px;
            padding-top: 12px;
            padding-bottom: 12px;
            border-radius: 15px;
            z-index: 99999;
            font-family: 'Satoshi-Medium', sans-serif;
            color: #29292F;
            box-shadow: 0px 10px 38px -10px rgba(22, 23, 24, 0.35),
              0px 10px 20px -15px rgba(22, 23, 24, 0.2);
            animation-duration: 400ms;
            animation-timing-function: cubic-bezier(0.16, 1, 0.3, 1);
            will-change: transform, opacity;
          }
          .ScreenityDropdownMenuContent[data-side="top"] {
            animation-name: slideDownAndFade;
          }
          .ScreenityDropdownMenuContent[data-side="right"] {
            animation-name: slideLeftAndFade;
          }
          .ScreenityDropdownMenuContent[data-side="bottom"] {
            animation-name: slideUpAndFade;
          }
          .ScreenityDropdownMenuContent[data-side="left"] {
            animation-name: slideRightAndFade;
          }
          .ScreenityItemIndicator {
            position: absolute;
            right: 12px;
            width: 18px;
            height: 18px;
            background: #3080F8;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
          }
          .ScreenityDropdownMenuItem,
          .ScreenityDropdownMenuRadioItem {
            font-size: 14px;
            line-height: 1;
            display: flex;
            align-items: center;
            height: 40px;
            padding: 0 5px;
            position: relative;
            padding-left: 22px;
            padding-right: 22px;
            user-select: none;
            outline: none;
          }
          .ScreenityDropdownMenuItem:hover {
              background-color: #F6F7FB !important;
              cursor: pointer;
          }
          .ScreenityDropdownMenuItem[data-disabled] {
            color: #6E7684; !important;
            cursor: not-allowed;
            background-color: #F6F7FB !important;
          }



          @keyframes slideUpAndFade {
            from {
              opacity: 0;
              transform: translateY(2px);
            }
            to {
              opacity: 1;
              transform: translateY(0);
            }
          }

          @keyframes slideRightAndFade {
            from {
              opacity: 0;
              transform: translateX(-2px);
            }
            to {
              opacity: 1;
              transform: translateX(0);
            }
          }

          @keyframes slideDownAndFade {
            from {
              opacity: 0;
              transform: translateY(-2px);
            }
            to {
              opacity: 1;
              transform: translateY(0);
            }
          }

          @keyframes slideLeftAndFade {
            from {
              opacity: 0;
              transform: translateX(2px);
            }
            to {
              opacity: 1;
              transform: translateX(0);
            }
          }
        </style>
      </div>
    </div>
    <div
      style="display: none"
      class="ubey-RecordingScreen-count-down ubey-RecordingScreen-count-down-container"
    >
      <style>
        .ubey-RecordingScreen-count-down-container {
          position: fixed;
          height: 100vh;
          width: 100vw;
          top: 0;
          left: 0;
          z-index: 9999999999999;
          background-color: rgba(0, 0, 0, 0.2);
        }

        .ubey-RecordingScreen-count-down-content {
          position: absolute;
          display: flex;
          top: 50%;
          left: 50%;
          justify-content: center;
          align-items: center;
          color: white;
          height: 15em;
          width: 15em;
          transform: translate(-50%, -100%);
          background-color: rgba(0, 0, 0, 0.6);
          border-radius: 50%;
        }

        #ubey-RecordingScreen-count-count {
          font-size: 14em;
          transform: translateY(-2%);
        }
      </style>
      <div class="ubey-RecordingScreen-count-down-content">
        <span id="ubey-RecordingScreen-count-count"></span>
      </div>
    </div>
    <div id="__REC__-container"></div>
  </body>
</html>
