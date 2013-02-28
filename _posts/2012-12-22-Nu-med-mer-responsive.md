---
layout: post
title: Nu med mer Responsive™
---

Skomakarens barn har oftast de sämsta skorna. Det är även sant inom webb-världen. Min egna sida, [WheresMar.co](http://wheresmar.co/ "WheresMar.co"), uppdaterades för några månader sedan till en ny fräsch design men något missades i processen.

Sidan såg bra ut, hade fina animationer men var byggd på ett förlegat sätt. Ingen gridd, bilderna var lågupplösta för iPhone/iPad/MacBook Pro Retina, och sidan såg inte bra ut i små enheter. 

För att öva mina Git-kunskaper skapade jag en ny bransch och började jobba med kodningen. Som gridd använde jag Dan Eden's [Toast](http://daneden.me/toast/ "Toast"). En riktigt simpel gridd som inte använder floats, clearfix, och annat som kan skapa problem. 

Jag ska inte gå igenom alla delar i processen men jag måste nämna tre coola finesser:

### 1) Ikonerna på förstasidan är inte bilder. 
Dom serveras som ett eget typsnitt. Genom att göra det sparar man in på storleken på sidan. Mer läsning om detta finns på [icomoon.io](http://icomoon.io/ "icomoon.io").

### 2) Bilderna på arbeten-sidan har en fokus satt. 
Vad betyder detta? Jo, när du minskar på storleken på sidan är alltid en viss del av bilden i fokus medan onödiga delar som kanske inte behövs döljs. [Focal Point](https://github.com/adamdbradley/focal-point/ "Focal Point")  kallas ramverket jag har använt för denna effekt.

### 3) Alla animationer på sidan är från CSS:en. 
Ingen javascript som kan gå långsamt på iOS, eller få fläktarna att starta på en MacBook Air.

Allt detta förs samman och fungerar bra från iPhone till dator. 

