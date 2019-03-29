<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "mathe";
    ?>
    <style type="text/css">
      .anchor{
        display: block;
        height: 115px; /*same height as header*/
        margin-top: -115px; /*same height as header*/
        visibility: hidden;
      }
    </style>
</head>
  <body>
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
  <div class="container">
    <span class="skiplink-text">Skip to main content</span>
  </div>
</a>

  <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
    <?php include ('includes/head.php'); ?>
  </header>

    <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
          <?php include ('includes/search.php'); ?>
          <?php include ('includes/nav_mathe.php'); ?>
        </div>

        
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            <ul class="section-nav">
            <li class="toc-entry toc-h2"><a href="#vektorfelder">Vektorfelder</a></li>
            <li class="toc-entry toc-h2"><a href="#parametrisierte_kurven">Parametrisierte Kurven</a></li>
            <li class="toc-entry toc-h2"><a href="#mehrfach-integration">Mehrfach-Integration</a></li>
            <li class="toc-entry toc-h2"><a href="#parametrisierte_flaechen">Parametrisierte Flächen</a></li>
            <li class="toc-entry toc-h2"><a href="#flussintegrale">Flussintegrale</a></li>
            <li class="toc-entry toc-h2"><a href="#partielle_ableitung">Partielle Ableitung</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Vektoranalysis</h1>

          <p class="bd-lead">Vektoranalysis ist ein Teilgebiet der Mathematik, das sich hauptsächlich mit Vektorfeldern in zwei oder mehr Dimensionen beschäftigt und dadurch die bereits in der Schulmathematik behandelten Gebiete der Differential- und der Integralrechnung wesentlich verallgemeinert.</p>


          <br><br><h5 id="vektorfelder">Vektorfelder</h5>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col" width=20%>Bezeichnung</th>
                  <th scope="col" width=42%>Formel</th>
                  <th scope="col">Grafik</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Funktionen in mehreren Variablen</td>
                  <td>$$ f: \mathbb{R}^2 \longrightarrow \mathbb{R}, \; (x_1; \; ... \; ; x_n) \mapsto f(x_1; \; ... \; ; x_n)  $$</td>
                  <td>Sowohl die Variablen als auch der Funktionswert können Masseinheiten tragen.<br><br>
                    <img src="bilder/vektoranalysis/vektorfelder/beispiel.gif"style="max-height:60%; max-width:100%"><br></td>
                </tr>
                <tr>
                  <td>Level-Mengen</td>
                  <td>$$ f^{-1}(\left \{ L \right \}) :=\left \{ p\in A\mid f(p) = L \right \} $$</td>
                  <td>Wenn man alle Punkte mit einem bestimmten wert sucht. Braucht man zum Beispiel bei für Höhenlinien auf der Karte.</td>
                </tr>
                <tr>
                  <td>Vektorfelder</td>
                  <td>$$ \vec{v}: \mathbb{R}^n \rightarrow \mathbb{R}^n \\(x_1; \; ... \; ;x_n )x \mapsto \vec{v} (x_1; \; ... \; ;x_n ) = \begin{bmatrix}v_1 (x_1; \; ... \; ;x_n )\\ \text{ } \\ \vdots \\ v_n (x_1; \; ... \; ;x_n )\end{bmatrix} $$</td>
                  <td><img src="bilder/vektoranalysis/vektorfelder/2d.png"style="max-height:100%; max-width:100%">Vektor <b>v(x<sub>1</sub>; ... ; x<sub>n</sub>)</b> stellt einen Vektor am Punkt <b>(x<sub>1</sub>; ... ; x<sub>n</sub>)</b> dar.</td>
                </tr>
                <tr>
                  <td>Homogenes Vektorfeld</td>
                  <td>$$ \vec{v} (x_1; \; ... \; ;x_n ) \equiv \small \text{konstant.} $$</td>
                  <td><img src="bilder/vektoranalysis/vektorfelder/homogen.jpeg"style="max-height:100%; max-width:100%"><br>An jedem Punkt der gleiche Vektor. </td>
                </tr>
                <tr>
                  <td>Einheitsvektorfeld / <br>Richtungsvektorfeld</td>
                  <td>$$ \left | \vec{v} (x_1; \; ... \; ;x_n ) \right | = 1 \\ \text{ } \\ \hat{v} (x_1; \; ... \; ;x_n ) =  \vec{v} (x_1; \; ... \; ;x_n ) $$</td>
                  <td>Mit der Länge 1 ohne Masseinheit. </td>
                </tr>
                <tr>
                  <td>Quellenfeld</td>
                  <td>$$ \vec{v} (x;y) = \begin{bmatrix}x\\y \end{bmatrix} $$</td>
                  <td><img src="bilder/vektoranalysis/vektorfelder/quellenfeld.jpeg"style="max-height:80%; max-width:75%"></td>
                </tr>
                <tr>
                  <td>Wirbelfeld</td>
                  <td>$$ \vec{v} (x;y) = \begin{bmatrix}-y\\x \end{bmatrix} $$</td>
                  <td><img src="bilder/vektoranalysis/vektorfelder/wirbelfeld.jpeg"style="max-height:80%; max-width:80%"></td>
                </tr>
              </tbody>
            </table>

          <br><br><h5 id="parametrisierte_kurven">Parametrisierte Kurven</h5>
            <table>
              <tr>
                  <td width=20%>Parametrisierte Kurven</td>
                  <td width=42%>$$ \normalsize \vec{s}: \left [ \tau _0,\tau_E \right ]\rightarrow \mathbb{R}^n\\ \text{ } \\ \tau \mapsto \vec{s}(\tau) = \small\begin{bmatrix}S_1(\tau)\\ \vdots \\ S_n(\tau)\end{bmatrix} $$</td>
                  <td><img src="bilder/vektoranalysis/parametrisierte_kurven/beispiel.png"style="max-height:60%; max-width:40%"></td>
                </tr>
                <tr>
                  <td width=20%>Kurvenparameter</td>
                  <td width=42%>$$ \tau $$</td>
                  <td>Der Kurvenparameter kann viele bedeutungen haben:<br>- Physikalische Zeit<br>- Winkel<br>- Länge<br>- Beliebige "Absteckung" des Weges</td>
                </tr>
                <tr>
                  <td>Geschwindigkeitsvektor</td>
                  <td>$$ \vec{v}(\tau) := \dot{\vec{s}} $$</td>
                  <td>Vektor s(τ) muss nicht injektiv sein, aber er soll so gewählt werden, dass v(τ) > 0</td>
                </tr>
                <tr>
                  <td>Bahngeschwindigkeit</td>
                  <td>$$ v(\tau) := \left | \vec{v}(\tau) \right | $$</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Bahnbeschleunigung</td>
                  <td>$$ \vec{a}(\tau) :=  \dot{\vec{v}}(\tau) $$</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Bahnvektor</td>
                  <td>$$ \hat{e}(\tau) := \hat{v}(\tau) = \frac{1}{v(\tau)}\cdot \vec{v}(\tau) $$</td>
                  <td>Der Bahnvektor ist der Einheitsvektor entlang der Bahn und existiert für alle τ element [τ<sub>0</sub>,τ<sub>E</sub>].</td>
                </tr>
                <tr>
                  <td>Bahn</td>
                  <td>$$ \small \text{Bildmenge }\; \normalsize \vec{s}(\left [ \tau_0,\tau_E \right ]) $$</td>
                  <td>Die Bahn ist die Menge aller erreichten Punkte und somit die Kurve im klassischen geometrischen Sinn. Es kann sein, dass verschiedene parametrisierte Kurven die gleiche Bahn haben.</td>
                </tr>
                <tr>
                  <td>Bogenlänge</td>
                  <td>$$ \Delta s := \int_{\tau_0}^{\tau_E}  v(\tau) \; \text{d}\tau $$</td>
                  <td>Δs ist unabhängig von der Wahl der Parametrisierung und stimmt mit dem klassischen Begriff der Länge aus der Geometrie überein.</td>
                </tr>
            </table>

            <table>
              <tr>
                  <td width=20%>Strecke zwischen A und B</td>
                  <td width=42%>$$ \vec{s}(\tau) = \vec{A}+ \tau \cdot (\vec{B}-\vec{A}) \small \; \text{ mit }\; \normalsize \tau \in \left [ 0,1 \right ] $$</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Kreis in R<sup>2</sup> um Ursprung</td>
                  <td>$$ \vec{s}(\tau) = \begin{bmatrix}r\cdot \cos(\tau)\\ r\cdot \sin(\tau)\end{bmatrix} \small \; \text{ mit }\; \normalsize \tau \in \left [ 0,2 \pi \right [ $$</td>
                  <td>Wie im Beispielbild von Parametrisierte Kurven.</td>
                </tr>
            </table>

            <table>
              <tr>
                <td rowspan="2" width=20%>Linienintegral<br>Kurvenintegral</td>
                <td width=42%>$$ I := \int_{\tau_0}^{\tau_E}\left \langle \vec{w},\vec{v} \right \rangle \text{d} \tau $$</td>
                <td rowspan="2"><img src="bilder/vektoranalysis/parametrisierte_kurven/linienintegral.png"style="max-height:60%; max-width:100%"><br><br>Linienintegrale sind bis auf Vorzeichen unabhängig von der Wahl der Parametrisierung.</td>
              </tr>
              <tr>
                <td>Masseinheit: $$ [I] = [\vec{w}]\cdot[\vec{s}]$$</td>
              </tr>
              <tr>
                <td>Geschlossene Kurven</td>
                <td>$$ \oint \small \text{ statt } \normalsize \int $$</td>
                <td><img src="bilder/vektoranalysis/parametrisierte_kurven/geschlossen.png"style="max-height:60%; max-width:60%"></td>
              </tr>
              <tr>
                <td>Zirkulation</td>
                <td>$$ \varUpsilon_{\vec{w}} = \oint_{s_0}^{s_E}\left \langle \vec{w},\hat{e} \right \rangle \text{d}s $$</td>
                <td>Das Linienintegral über einen geschlossenen Weg heisst Zirkulation des Vektorfeldes entlang des Weges. </td>
              </tr>
            </table>

          <br><br><h5 id="mehrfach-integration">Mehrfach-Integration</h5>

              <table>
                <tr>
                  <td rowspan="2" width=20%>Zweifachintegrale</td>
                  <td width=42%>$$ \int_{G}\: f \; \text{d}A $$</td>
                  <td rowspan="2"><img src="bilder/vektoranalysis/mehrfach_integration/zweifachintegrale.png"style="max-height:60%; max-width:100%"></td>
                </tr>
                <tr>
                  <td>Das Integral von f über G ist das Volumen zwischen der x-y-Ebene und dem Graphen von f über dem Gebiet G</td>
                </tr>
                <tr>
                  <td>Funktion f ist 1</td>
                  <td>$$ \int_{G} \: 1 \; \text{d}A $$</td>
                  <td>Schreibweisen:<br>- Flächeninhalt von G<br>- Mass von G<br>- µ(G)</td>
                </tr>
                <tr>
                  <td>Integration einer Konstanten</td>
                  <td>$$ \int_{G} \: C \; \text{d}A = C \cdot \int_{G} \:1  \; \text{d}A  = C \cdot \mu (G)$$</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Integration über Rechtecke</td>
                  <td>$$ G = \left [ x_0,x_E \right ] \times \left [ y_0,y_E \right ] \\ \text{ } \\ f:G\rightarrow \mathbb{R}$$</td>
                  <td><img src="bilder/vektoranalysis/mehrfach_integration/rechteck.png"style="max-height:60%; max-width:100%"></td>
                </tr>
                <tr>
                  <td>Satz von Fubini</td>
                  <td>$$ \int_{G}\: f \; \text{d}A = \int_{y_0}^{y_E}\int_{x_0}^{x_E}f(x;y)\; \text{d}x \: \text{d}y$$</td>
                  <td><img src="bilder/vektoranalysis/mehrfach_integration/beispiel.png"style="max-height:60%; max-width:100%"></td>
                </tr>
                <tr>
                  <td>Separationssatz</td>
                  <td>$$ \int_{G}\: f \; \text{d}A = \int_{x_0}^{x_E}g(x)\; \text{d}x \cdot \int_{y_0}^{y_E}h(y)\; \text{d}y $$</td>
                  <td>Falls f(x;y) = g(x) ⋅ h(y)</td>
                </tr>
                <tr>
                  <td>In y-Richtung begrenzt</td>
                  <td>$$ \int_{G}\: f \; \text{d}A = \int_{x_0}^{x_E}\int_{u(x)}^{v(x)}f(x;y)\; \text{d}y \: \text{d}x $$</td>
                  <td><img src="bilder/vektoranalysis/mehrfach_integration/yRichtung.png"style="max-height:60%; max-width:100%"></td>
                </tr>
                <tr>
                  <td>In x-Richtung begrenzt</td>
                  <td>$$ \int_{G}\: f \; \text{d}A = \int_{y_0}^{y_E}\int_{u(y)}^{v(y)}f(x;y)\; \text{d}x \: \text{d}y $$</td>
                  <td><img src="bilder/vektoranalysis/mehrfach_integration/xRichtung.png"style="max-height:60%; max-width:100%"></td>
                </tr>
                <tr>
                  <td>3-Eck-artige Gebiete</td>
                  <td>$$ \int_{G}\: f \; \text{d}A = \int_{x_0}^{x_E}\int_{y_0}^{g(x)}f(x;y)\; \text{d}y \: \text{d}x  

                    \\ \text{ } \\ \small \text{ oder } \normalsize \\ \text{ } \\

                    \int_{G}\: f \; \text{d}A = \int_{y_0}^{y_E}\int_{x_0}^{g^{-1}(x)}f(x;y)\; \text{d}x \: \text{d}y $$</td>
                  <td><img src="bilder/vektoranalysis/mehrfach_integration/3eck.png"style="max-height:60%; max-width:100%"></td>
                </tr>
              </table>

          <br><br><h5 id="parametrisierte_flaechen">Parametrisierte Flächen</h5>
            <table>
              <tr>
                <td width=20%>Parametrisierung des Flächenstücks</td>
                <td width=42%>$$ \vec{P} (u;v) \rightarrow  \mathbb{R}^3\\ \text{ } \\(u;v) x \mapsto \vec{P}(u;v) = \begin{bmatrix}x(u;v)\\ y(u;v)\\ z(u;v)\end{bmatrix} $$</td>
                <td><img src="bilder/vektoranalysis/parametrisierte_flaechen/bsp.png"style="max-height:60%; max-width:100%"></td>
              </tr>
              <tr>
                <td>Koordinatenbasis-Vektorfelder</td>
                <td>$$ \vec{e}_1 := \vec{e}_u := \vec{P},u \equiv \vec{P}(u,v) \small \text{ abgeleitet nach u.} \normalsize
                    \\ \vec{e}_2 := \vec{e}_v := \vec{P},v \equiv \vec{P}(u,v) \small \text{ abgeleitet nach v.} $$</td>
                <td><img src="bilder/vektoranalysis/parametrisierte_flaechen/koordinatenbasis-vektorfelder.png"style="max-height:60%; max-width:50%"><br>
                  Vektor e<sub>1</sub> und e<sub>2</sub> zeigen Tangential zu M, d.h sie spannen die Tangentialebene auf.</td>
              </tr>
              <tr>
                <td>Metrik / Gram-Matrix</td>
                <td>$$ \left [ g_{\mu v} \right ] :=\begin{bmatrix}g_{11} & g_{12} \\ g_{21} & g_{22} \end{bmatrix} :=\begin{bmatrix}\left \langle\vec{e}_1,\vec{e}_1 \right \rangle &\left \langle \vec{e}_1,\vec{e}_2 \right \rangle  \\ \left \langle \vec{e}_2,\vec{e}_1 \right \rangle & \left \langle \vec{e}_2,\vec{e}_2 \right \rangle\end{bmatrix} $$</td>
                <td>- [g<sub>μv</sub>] ist symmetrisch: [g<sub>μv</sub>]<sup>t</sup> = [g<sub>μv</sub>]<br>
                  - In vielen Anwendungen ist Vektor e<sub>u</sub> rechtwinklig zu e<sub>v</sub>, dann ist [g<sub>μv</sub>] eine diagonal Matrize</td>
              </tr>
              <tr>
                <td>Gram-Determinante</td>
                <td>$$ g := \text{det}([g_{\mu v}]) = g_{11} \cdot g_{22} - g_{21}\cdot g_{12} \\ \text{ } \\  \sqrt{g} \equiv \small \text{ Massfunktion } $$</td>
                <td></td>
              </tr>
              <tr>
                <td>Normalenvektoren</td>
                <td>$$ \vec{n} := \pm \; \vec{e}_1 \times \vec{e}_2 \\ \text{ } \\ \left | \vec{n} \right | = \sqrt{g}$$</td>
                <td>so dass Vektor n nach "aussen" zeigt, wenn möglich.</td>
              </tr>
              <tr>
                <td>Einheitsnormalenvektor</td>
                <td>$$ \hat{n} := \frac{1}{\left | \vec{n} \right |} \cdot \vec{n} = \frac{1}{\sqrt{g}}\cdot \vec{n} $$</td>
                <td></td>
              </tr>
              <tr>
                <td>Flächenintegration</td>
                <td>$$ A =\int_M 1 \text{ d}A = \int_U \sqrt{g} \text{ d}U  $$</td>
                <td>Der Flächeninhalt von M ist:</td>
              </tr>
            </table>

          <br><br><h5 id="flussintegrale">Flussintegrale</h5>
            <table>
              <tr>
                <td width=20%>Fluss (Flux)</td>
                <td width=42%>$$ \Phi _{\vec{v}} := \int_M \left \langle \vec{v},\hat{n} \right \rangle \text{d}A $$</td>
                <td><img src="bilder/vektoranalysis/flussintegrale/situation.png"style="max-height:60%; max-width:100%"><br>Der Fluss durch die parametrisierte Fläche M im Bereich eines Vekotrfeldes v.</td>
              </tr>
              <tr>
                <td>S1: Fläche parametrisieren</td>
                <td>$$ \hat{n}(u,v) = \begin{bmatrix}n_x(u;v)\\ n_y(u;v)\\ n_z(u;v) \end{bmatrix} \\ \text{ } \\ \sqrt{g} = \sqrt{g(u;v)} $$</td>
                <td></td>
              </tr>
              <tr>
                <td>S2: v entlang M berechnen</td>
                <td>$$\vec{v} = \begin{bmatrix}v_x\begin{pmatrix}x(u;v)\\ y(u;v)\\ z(u;v)\end{pmatrix} \\ v_v\begin{pmatrix}x(u;v)\\ y(u;v)\\ z(u;v)\end{pmatrix}\\ v_z\begin{pmatrix}x(u;v)\\ y(u;v)\\ z(u;v)\end{pmatrix}\end{bmatrix} $$</td>
                <td>Die geschwindigkeit in jede Richtung, an jedem Ort.</td>
              </tr>
              <tr>
                <td>S3: Integration</td>
                <td>$$ \Phi _{\vec{v}} := \int_M \left \langle \vec{v},\hat{n} \right \rangle \text{d}A = \int_{..}^{..}\int_{..}^{..}\left \langle \vec{v},\hat{n} \right \rangle \sqrt{g} \text{ d}u\text{ d}v $$</td>
                <td>Werte von S1 und S2 in die Formel einfügen.</td>
              </tr>
              <tr>
                <td>Geschlossene Flächen</td>
                <td>$$ \oint _M \left \langle \vec{v},\hat{n} \right \rangle \text{d}A = 0 $$</td>
                <td> Für homogene Vektorfelder ist das geschlossene Integral über die Fläche M 0.</td>
              </tr>
              <tr>
                <td>Volumendurchfluss</td>
                <td>$$ \Phi _{\vec{v}} \equiv \small \frac{\text{durchflossenes Volumen}}{\text{benötigte Zeit}} $$</td>
                <td> Volumendurchfluss des Mediums durch die Fläche M.</td>
              </tr>
            </table>

          <br><br><h5 id="partielle_ableitung">Partielle Ableitung</h5>
            <table>
              <tr>
                <td width=20%>Partielle Ableitung</td>
                <td width=42%>$$ f(X^1, ...,X^n) \\ \text{ } \\ \large f_{\large ,\mu} $$</td>
                <td>In der Differentialrechnung ist eine partielle Ableitung die Ableitung einer Funktion mit mehreren Argumenten nach einem dieser Argumente (in Richtung dieser Koordinatenachse).</td>
              </tr>
              <tr>
                <td>Nabla-Operator</td>
                <td>$$ \vec{\nabla}:=\begin{bmatrix}f,_1\\ f,_2\\ f,_3\end{bmatrix} $$</td>
                <td>Der Nabla-Operator ist ein formaler Vektor, dessen Komponenten aus den partiellen Differential-Operatoren bestehen.</td>
              </tr>
              <tr>
                <td rowspan="6">Gradient</td>
                <td>$$ \vec{\nabla}f :=\vec{\text{grad}}(f) :=\begin{bmatrix}f,_1\\ f,_2\\ f,_3\end{bmatrix} $$</td>
                <td>Sei f ein Skalarfeld, so ist der Gradient von f ein Vektor, der in die Richtung der größten Änderung von f im Punkt P(x;y;z) zeigt und dessen Betrag gleich dieser größten Änderung ist.</td>
              </tr>
              <tr>
                <td>$$ \vec{\nabla}(g+h) = \vec{\nabla}g + \vec{\nabla} h $$</td>
                <td>Summen-Regel</td>
              </tr>
              <tr>
                <td>$$ \vec{\nabla}(g\cdot h) = a \cdot \vec{\nabla} g $$</td>
                <td>Faktor-Regel</td>
              </tr>
              <tr>
                <td>$$ \vec{\nabla}(g \cdot h) = (\vec{\nabla}g) \cdot h +  g \cdot (\vec{\nabla} h) $$</td>
                <td>Produkt-Regel</td>
              </tr>
              <tr>
                <td>$$ \vec{\nabla}f = g'(h(x^1; ... ; x^n)) \cdot \vec{\nabla} h $$</td>
                <td>Ketten-Regel</td>
              </tr>
              <tr>
                <td>$$ G(\tau ) := f(\vec{s}(\tau ))\\ \text{ } \\ \dot{G}(\tau ) = \left \langle \vec{\nabla}f,\vec{v} \right \rangle $$</td>
                <td>Ketten-Regel bei einer Parametrisierten Kurve</td>
              </tr>
              <tr>
                <td rowspan="2">Hesse-Matrix</td>
                <td>$$ \vec{\nabla}^2f =\begin{bmatrix}f_{,1,1} & f_{,1,2} & \cdots  &f_{,1,n} \\ f_{,2,1} & f_{,2,2} &\cdots   &f_{,2,n} \\ \vdots  &  &  & \\ f_{,n,1} & f_{,n,2} & \cdots  &f_{,n,n} \end{bmatrix} $$</td>
                <td>Der Nabla-Operator ist ein formaler Vektor, dessen Komponenten aus den partiellen Differential-Operatoren bestehen.</td>
              </tr>
              <tr>
                <td>$$ f_{\mu ,\nu } = f_{\nu ,\mu }  \; \: \small \text{ bzw. } \normalsize (\vec{\nabla}f)^t = \vec{\nabla}f $$</td>
                <td>Symmetrie der Hesse-Matrix gilt für jede anständige Funktion.</td>
              </tr>
              <tr>
                <td>Laplace-Ableitung</td>
                <td>$$ \Delta f :=\text{tr}(\vec{\nabla}^2 f) = f_{,1,1} + f_{,2,2} + ... + f_{,n,n} $$</td>
                <td>Ist in der linearen Algebra die Spur. Sie ist von einer quadratischen Matrix die Summe der Einträge auf der Diagonalen.</td>
              </tr>
              <tr>
                <td rowspan="4">Divergenz</td>
                <td>$$ \text{div}(\vec{v}) := {V^1}_{,1}+{V^2}_{,2}+ ... +{V^n}_{,n} \\ \text{ } \\ \text{div}(\vec{v}) = \left \langle \vec{\nabla},\vec{v} \right \rangle$$</td>
                <td>Die Divergenz wird für ein <b>Vektorfeld v</b> berechnet und ist selbst ein Skalar. Sie gibt z.B. für ein Strömungsfeld an, ob aus einem infinitesimalen Volumen, P(x;y;z) mehr Flüssigkeit heraus- als hineinströmt.<br><br>Ist die Divergenz positiv, so befindet sich in P eine Quelle, ist sie negativ, so befindet sicht in P eine Senke. Ist die <b>Divergenz 0</b>, dann strömt genauso viel Flüssigkeit in das Volumen hinein wie heraus. Das wird dann <b>quellenfrei</b> genannt.</td>
              </tr>
                <tr><td>$$ \text{div}(\vec{v}+\vec{w}) = \text{div}(\vec{v}) + \text{div}(\vec{w}) $$</td><td>Summen-Regel</td></tr>
                <tr><td>$$ \text{div}(a \cdot\vec{v}) = a \cdot \text{div}(\vec{v}) $$</td><td>Faktor-Regel</td></tr>
                <tr><td>$$ \text{div}(f \cdot \vec{v}) = \left \langle \vec{\nabla}f,\vec{v} \right \rangle + f\cdot \text{div}(\vec{v}) $$</td><td>Ketten-Regel (f ist eine skalare Funktion)</td>
              </tr>
              <tr>
                <td rowspan="5">Rotation</td>
                <td>$$ \text{rot}(\vec{v}) := {V^2}_{,1} - {V^1}_{,2} \\ \text{ } \\ \vec{v}(x^1;x^2) = \begin{bmatrix}V^1 (x^1;x^2)\\ V^2 (x^1;x^2)\end{bmatrix} $$</td>
                <td>Die Rotation wird für ein <b>Vektorfeld v</b> berechnet, und ist in 2D ein Skalar.<br><br>Betrachtet man ein infinitesimales Volumen im Vektorfeld, so gibt der Rotationsvektor an wie stark und um welche Drehachse sich das Volumen dreht. Ist die <b>Rotation 0</b>, dann ist das Vektorfeld <b>wirbelfrei</b>.</td>
              </tr>
              <tr>
                <td>$$\text{rot}(\vec{v}) := \begin{bmatrix}{V^3}_{,2}-{V^2}_{,3}\\ {V^1}_{,3}-{V^3}_{,1}\\ {V^2}_{,1}-{V^1}_{,2}\end{bmatrix} \\ \text{ } \\ \vec{v}(x^1;x^2;x^3) = \begin{bmatrix}V^1 (x^1;x^2;x^3)\\ V^2 (x^1;x^2;x^3)\\ V^3 (x^1;x^2;x^3)\end{bmatrix} $$</td>
                <td>In 3D ist rot(v) ein Vektor. Dieser steht senkrecht auf der "Wirbel-Ebene" von Vektor v (Analog zum Drehimpuls).</td>
              </tr>
              <tr>
                <td>$$ \text{rot}(\vec{v} + \vec{w}) = \text{rot}(\vec{v}) + \text{rot}(\vec{w}) $$</td>
                <td>Summen-Regel</td>
              </tr>
              <tr>
                <td>$$ \text{rot}(a \cdot \vec{v}) = a \cdot \text{rot}(\vec{v}) $$</td>
                <td>Faktor-Regel</td>
              </tr>
              <tr>
                <td>$$ \text{rot}(f \cdot \vec{v} ) = \vec{\nabla}f \times \vec{v} + f \cdot \text{rot}(\vec{v}) $$</td>
                <td>In 3D gilt:</td>
              </tr>
              <tr>
                <td rowspan="4">Weitere Regeln</td>
                <td>$$ \text{div}(\vec{\nabla}f) = \Delta f $$</td>
                <td>nD</td>
              </tr>
              <tr>
                <td>$$ \text{rot}(\vec{\nabla}f) = 0 $$</td>
                <td>2D und 3D</td>
              </tr>
              <tr>
                <td>$$ \text{div}(\text{rot}(\vec{v})) = 0 $$</td>
                <td>3D</td>
              </tr>
              <tr>
                <td>$$ \text{rot}(\text{rot}(\vec{v})) = \vec{\nabla}\text{div}(\vec{v})-\Delta \vec{v} $$</td>
                <td>3D</td>
              </tr>
            </table>

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>