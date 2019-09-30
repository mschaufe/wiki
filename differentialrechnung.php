<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "mathe";?>
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
            <li class="toc-entry toc-h2"><a href="#ableitung">Ableitung</a></li>
            <li class="toc-entry toc-h2"><a href="#ableitungsregeln">Ableitungsregeln</a></li>
            <li class="toc-entry toc-h2"><a href="#spezielle_funktionene">Spezielle Funktionen</a></li>
            <li class="toc-entry toc-h2"><a href="#differentialgleichung">Differentialgleichung</a></li>
            <li class="toc-entry toc-h2"><a href="#differentialgleichung">Visualisierung</a></li>
            <li class="toc-entry toc-h2"><a href="#separation_der_variablen">Separation der Variablen</a></li>
            <li class="toc-entry toc-h2"><a href="#Anwendungen">Anwendungen</a></li>
            <li class="toc-entry toc-h2"><a href="#tools">Tools</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Differentialrechnung</h1>

          <p class="bd-lead">Die Differential- bzw. Differenzialrechnung ist ein wesentlicher Bestandteil der Analysis und damit ein Gebiet der Mathematik. Sie ist eng verwandt mit der Integralrechnung, mit der sie gemeinsam unter der Bezeichnung Infinitesimalrechnung zusammengefasst wird.</p>

          <br><br><h5 id="ableitung">Ableitung</h5>
          
          <table class="table">
                <thead>
                  <tr id="add_und_sub">
                    <th scope="col" width=20%>Bezeichnung</th>
                    <th scope="col" width=42%>Formel</th>
                    <th scope="col">Grafik / Text</th>
                  </tr>
                </thead>
                <tbody>
                  <tr id="mult_mit_skalar">
                    <td rowspan="2" >Differenzenquotient / mittlere Änderungsrate</td>
                    <td>$${\frac{\Delta y}{\Delta x} } = \frac{\Delta f}{\Delta x} \coloneqq \frac{f(x_{0}+\Delta x)-f(x_{0})}{\Delta x}$$</td>
                    <td rowspan="2"><img src="bilder/differentialrechnung/ableitung/differenzenquotient.png"style="max-height:50%; max-width:80%"></td>
                  </tr>
                  <tr>
                    <td><p>Der Differenzenquotient gibt die Steigung der Sekante an.</p></td>
                  </tr>
            </tbody>
            </table>

            <br><br><h5 id="ableitungsregel">Ableitungsregeln</h5>
            <table class="table">
                <tbody>
                  <tr>
                    <th width=20%>Regel</th>
                    <th width=42%>Funktion</th>
                    <th>Ableitung</th>
                  </tr>
                  <tr>
                    <td>Monom-Ableitung</td>
                    <td>$$ f(x) = x^{s} $$ </td>
                    <td>$$f'(x) = s \cdot x^{s-1} $$</td>
                  </tr>
                  <tr>
                    <td width=20%>Summenregel</td>
                    <td width=42%>$$ f(x) = u(x) \pm v(x) $$</td>
                    <td>$$ f'(x) = u'(x) \pm u'(x) $$ </td>
                  </tr>
                  <tr>
                    <td width=20%>Faktorregel</td>
                    <td width=42%>$$ f(x) = c \cdot u(x) $$</td>
                    <td>$$ f'(x) = c \cdot u'(x) $$</td>
                  </tr>
                  <tr>
                    <td width=20%>Produktregel</td>
                    <td width=42%>$$ f(x) = u(x) \cdot v(x) $$</td>
                    <td>$$ f'(x) = u'(x) \cdot u(x) + u(x) \cdot v'(x) $$</td>
                  </tr>
                  <tr>
                    <td width=20%>Quotientenregel</td>
                    <td width=42%>$$ f(x) = \frac{u(x)}{v(x)} $$</td>
                    <td>$$ f'(x) = \frac{u'(x)\cdot v(x)-u(x)\cdot v'(x)}{v^2(x)} $$</td>
                  </tr>
                  <tr>
                    <td width=20%>Kettenregel</td>
                    <td width=42%>$$ f(x) = u(v(x)) $$</td>
                    <td>$$ f'(x) = u'(v(x)) \cdot v'(x) $$</td>
                  </tr>
                  
            </tbody>
            </table>

            <br><br><h5 id="spezielle_funktionene">Spezielle Funktionen</h5>

            <table class="table">
              <tr>
                <td rowspan="2" width=20%>Sinus</td>
                <td width=42%>$$ \sin'(x) = \cos(x) $$</td>
                <td>$$ \arcsin'(x) = \frac{1}{\sqrt{1-x^2}} $$</td>
              </tr>
              <tr>
                <td>$$ \sinh'(x) = \cosh(x) $$</td>
                <td>$$ \text{arsinh}'(x) = \frac{1}{\sqrt{x^2+1}} $$</td>
              </tr>
              <tr>
                <td rowspan="2">Cosinus</td>
                <td>$$ \cos'(x) = -\sin(x) $$</td>
                <td>$$ \arccos'(x) = \frac{1}{\sqrt{1-x^2}} $$</td>
              </tr>
              <tr>
                <td>$$ \cosh'(x) = -\sinh(x) $$</td>
                <td>$$ \text{arcosh}'(x) = \frac{1}{\sqrt{x^2-1}} $$</td>
              </tr>
              <tr>
                <td rowspan="2">Tangens</td>
                <td>$$ \tan'(x) = \frac{1}{\cos^{2}(x)} = 1+\tan^2(x) $$</td>
                <td>$$ \arctan'(x) = \frac{1}{1+x^2} $$</td>
              </tr>
              <tr>
                <td>$$ \tanh'(x) = \frac{1}{\cosh^2(x)} = 1-\tanh^2(x) $$</td>
                <td>$$ \text{artanh}'(x) = \frac{1}{1-x'2} $$</td>
              </tr>
            </table>

            <table class="table">
              <tr>
                <td width=20%>Konstante c</td>
                <td width=42%>$$c' = 0$$</td>
                <td>$$ (c \cdot x)' = c $$</td>
              </tr>
              <tr>
                <td>Exponentialfunktion</td>
                <td>$$ (e^x)' = e^x $$</td>
                <td>$$ (a^x)' = \ln(a) \cdot a^x $$</td>
              </tr>
              <tr>
                <td>Logarithmus</td>
                <td>$$ \ln(\left | x \right |)'= \frac{1}{x} $$</td>
                <td>$$ \log_a(\left | x \right |)' = \log_a(e)\cdot \frac{1}{x} = \frac{1}{ \ln(a)\cdot x} $$</td>
              </tr>
              <tr>
                <td>Wurzel</td>
                <td>$$ (\sqrt{x})'  = \frac{1}{2\sqrt{x}} $$</td>
                <td>$$ \left(\frac{1}{\sqrt{x}}\right)'  = -\frac{1}{2 x^{3/2}} $$</td>
              </tr>
              <tr>
                <td>Monom-Regel</td>
                <td>$$ (x^s)' = x\cdot x^{s-1} $$</td>
                <td>$$ \left(\frac{1}{x}\right)' = -\frac{1}{x^2} $$</td>
              </tr>
            </table>

            <br><br><h5 id="differentialgleichung">Differentialgleichung</h5>
            <table class="table">
              <tr>
                <td rowspan="4" width=20%>Begriffe und Abkürzungen</td>
                <td width=42%>$$ \text{IVP}  $$</td>
                <td>Initial value problem<br>Anfangswertproblem</td>
              </tr>
              <tr>
                <td>$$ \text{ODE} $$</td>
                <td>Ordinary differential equation<br>gewöhnliche differentialgleichung<br>- Differentialgleichung für eine Funktion in einer Variable.</td>
              </tr>
              <tr>
                <td>$$ \text{IC} $$</td>
                <td>Initial Conditions<br>Anfangsbedingungen</td>
              </tr>
              <tr>
                <td>$$ \text{Grad} $$</td>
                <td>Der Grad einer ODE ist die Nummer der höchsten Ableitung in der ODE.</td>
              </tr>
            </table>
            <table>
              <tr>
                    <th width=20%>Klassifikatoin</th>
                    <th width=42%>Form (1. Grades)</th>
                    <th>Beispiel </th>
                  </tr>
              <tr>
                <td width=20%>1. Analytisch isolierbar</td>
                <td width=42%>$$ y' = f(x;y) $$</td>
                <td>$$ y' = x^2 \cdot y^5$$ $$ y' \cdot (1+x^2) = \cosh(y)$$</td>
              </tr>
              <tr>
                <td>2. Elementar integrierbar </td>
                <td>$$ y' = g(x) $$</td>
                <td>$$ y' = 2x $$ $$ y' = 19 \cdot \tan(x^2) $$</td>
              </tr>
              <tr>
                <td>3. autonom </td>
                <td>$$ y' = y $$</td>
                <td>$$ y' = 1+y^5 $$ $$ \sin(y') + \cos(y) = 1$$</td>
              </tr>
              <tr>
                <td>4. Separierbar </td>
                <td>$$ y' = g(x) \cdot h(y) $$</td>
                <td>$$ y' = 1 \cdot y $$ $$ y' = (5+x^2)\cdot y $$</td>
              </tr>
              <tr>
                <td rowspan="3">5. Linear </td>
                <td>$$ y' = m(x) \cdot y + q(x) $$</td>
                <td>$$ y' = 5y + 7 $$ $$ y' = \sin(x) \cdot y + e^x $$</td>
              </tr>
              <tr>
                <td>homogen $$ y' = m(x) \cdot y $$</td>
                <td>$$ y' = 7x^2 \cdot y $$ $$ y' = \cosh(x) \cdot y $$</td>
              </tr>
              <tr>
                <td>inhomogen (konst. Koeffizient) $$ y' = m \cdot y + q(x) $$</td>
                <td>$$ y' = 2y $$ $$ y' = -3y + \cos(2x) $$</td>
              </tr>
            </table>
            

            <table>
              <tr>
                <td rowspan="2" width=20%>Statische Lösungen</td>
                <td width=42%>$$ y_s(x) = c \equiv \small\text{konst.} $$</td>
                <td>Eine Lösung einer ODE heisst <b>statisch</b>, falls sie konstant ist. Das heisst y<sub>s</sub>' = y<sub>s</sub>'' = y<sub>s</sub>''' = ... = 0<br><br>
                  Die statische Lösung charakterisiert eine ODE und sollte immer als <b>Erstes</b> bestimmt werden.</td>
              </tr>
              <tr>
                <td>
                  Beispiel 1:
                  $$ y' = 2y + 8 $$
                  $$ y_s' = 2y_s + 8 $$
                  $$ 0 = 2y_s + 8 $$
                  $$ y_s = -4 $$
                </td>
                <td>
                  Beispiel 2:
                  $$ y' = y^2 -1 = (y+1) \cdot (y-1) $$
                  $$ y_s' = (y_s+1) \cdot (y_s-1) $$
                  $$ 0 = (y_s+1) \cdot (y_s-1) $$
                  $$ y_{s1} = -1 ; \: \; y_{s2} = 1 $$
                </td>
              </tr>
            </table>

            <br><br><h5 id="linearhomogeneODEerstengrades">Linear homogene ODE 1. Grades</h5>
            <table>
              <tr id="add_und_sub">
                    <th scope="col" width=20%>Schritt</th>
                    <th scope="col" width=42%>Allgemein Lösung</th>
                    <th scope="col">Speziell Lösung</th>
              </tr>
              <tr>
                <td>Stammfunktion</td>
                <td>$$ M(x) = \int{m(x) \text{ d}x} $$</td>
                <td>$$ M(x) = \int{m(x) \text{ d}x} $$</td>
              </tr>
              <tr>
                <td width=20%>Lösungsformel</td>
                <td width=42%>$$ y(x) = C \cdot e^{M(x)} $$</td>
                <td>$$ y(x) = C \cdot e^{M(x)-M(x_0)} $$</td>
              </tr>
            </table>

            <br><br><h5 id="linearhomogeneODEerstengrades">Linear inhomogene ODE 1. Grades</h5>
            <table>
              <tr id="add_und_sub">
                    <th scope="col" width=20%>Schritt</th>
                    <th scope="col" width=42%>Allgemein Lösung</th>
                    <th scope="col">Speziell Lösung</th>
              </tr>
              <tr>
                <td width=20%>Gegeben</td>
                <td width=42%>ODE$$ y'=m(x)\cdot y + q(x) $$</td>
                <td>IVP$$ \left\{\begin{matrix}\text{ODE: } \;  y'=m(x)\cdot y + q(x)\\ \text{IC: }\; y(x_0) = y_0 \kern{10mm} \end{matrix} \right. $$</td>
              </tr>
              <tr>
                <td>Stammfunktion</td>
                <td>$$ M(x) = \int{m(x) \text{ d}x} $$</td>
                <td>$$ M(x) = \int{m(x) \text{ d}x} $$</td>
              </tr>
              <tr>
                <td>Variation der Konstanten</td>
                <td>$$ C(x) = \int{q(x) \cdot e^{-M(x)} \text{ d}x} $$</td>
                <td>$$ C(x) = \int_{x_0}^{x}{q(s) \cdot e^{-M(s)} \text{ d}s} $$</td>
              </tr>
              <tr>
                <td width=20%>Lösungsformel</td>
                <td width=42%>$$ y(x) = (C + C(x)) \cdot e^{M(x)} $$</td>
                <td>$$ y(x) = (y_0 + C(x) \cdot e^{M(x_0)}) \cdot e^{M(x)-M(x_0)}  $$</td>
              </tr>
            </table>

          <br><br><h5 id="linearhomogeneODEerstengrades">Linear homogene ODE 2. Grades</h5>
            <table>
              <tr id="add_und_sub">
                <th scope="col" width=20%>Schritt</th>
                <th scope="col" width=42%>Allgemein Lösung</th>
                <th scope="col">Speziell Lösung</th>
              </tr>
              <tr>
                <td width=20%>Gegeben</td>
                <td width=42%>ODE$$ a  y'' + b  y' + c  y = 0 $$</td>
                <td>IVP$$ \left\{\begin{matrix}\text{ODE: } \; a  y'' + b  y' + c  y = 0  \\ \text{IC: }\; y(x_0) = y_0 \kern{8mm}  \\ \text{ }\; y'(x_0) = v_0 \kern{2mm} \end{matrix} \right. $$</td>
              </tr>
              <tr>
                <td>Charakteristisches Polynom</td>
                <td>$$ p(\lambda) = a\lambda^2 + b\lambda -c $$</td>
                <td>$$ p(\lambda) = a\lambda^2 + b\lambda -c $$</td>
              </tr>
              <tr>
                <td>Diskriminante</td>
                <td>$$ D = b^2 -4ac $$</td>
                <td>$$ D = b^2 -4ac $$</td>
              </tr>
            </table>
            <table>
              <tr>
                <td width=20% rowspan="4">D > 0</td>
                <td width=42% colspan="2">$$ \lambda_{1,2} = \frac{-b \pm \sqrt{D}}{2a} $$</td>
                <td colspan="2">$$ \lambda_{1,2} = \frac{-b \pm \sqrt{D}}{2a} $$</td>
              </tr>
              <tr>
                <td width=21%>$$ y_1(x) = e^{\lambda_1 \cdot x} $$</td>
                <td width=21%>$$ y_2(x) = e^{\lambda_2 \cdot x} $$</td>
                <td>$$ y_1(x) = e^{\lambda_1 \cdot x} $$</td>
                <td>$$ y_1(x) = e^{\lambda_1 \cdot x} $$</td>
              </tr>
              <tr>
                <td width=21% colspan="2">$$  $$</td>
                <td>$$ C_1 = \frac{\lambda_2 \cdot y_0-v_0}{\lambda_2 -\lambda_1} $$</td>
                <td>$$ C_2 = \frac{v_0 - \lambda_1 \cdot y_0}{\lambda_2 - \lambda_1}$$</td>
              </tr>
              <tr>
                <td width=21% colspan="2">$$ y(x) = c_1 \cdot y_1(x) + c_2 \cdot y_2(x) = C_1 \cdot e^{\lambda_1 \cdot x} + C_2 \cdot e^{\lambda_2 \cdot x} $$</td>
                <td colspan="2">$$ y(x) = C_1 \cdot e^{\lambda_1 \cdot x} + C_2 \cdot e^{\lambda_2 \cdot x} $$</td>
              </tr>


              <tr>
                <td width=20% rowspan="4">D = 0</td>
                <td width=42% colspan="2">$$ \lambda = -\frac{b}{2a} $$</td>
                <td colspan="2">$$ \lambda = -\frac{b}{2a} $$</td>
              </tr>
              <tr>
                <td width=21%>$$ y_1(x) = e^{\lambda \cdot x} $$</td>
                <td width=21%>$$ y_2(x) = x \cdot e^{\lambda \cdot x} $$</td>
                <td>$$ y_1(x) = e^{\lambda \cdot x} $$</td>
                <td>$$ y_2(x) = x \cdot e^{\lambda \cdot x} $$</td>
              </tr>
              <tr>
                <td colspan="2"></td>
                <td>$$ C_1 = y_0 $$</td>
                <td>$$ C_2 = v_0 - \lambda \cdot y_0 $$</td>
              </tr>
              <tr>
                <td width=21% colspan="2">$$ y(x) = c_1 \cdot y_1(x) + c_2 \cdot y_2(x) = (C_1+C_2 \cdot x) \cdot e^{\lambda x} $$</td>
                <td colspan="2">$$  y(x) = (C_1+C_2 \cdot x) \cdot e^{\lambda x}$$</td>
              </tr>


              <tr>
                <td width=20% rowspan="7">D < 0</td>
                <td width=42% colspan="2">$$ \lambda_{1,2} = \frac{-b \pm \sqrt{D}}{2a} = -\frac{b}{2a} \pm i \frac{\sqrt{\left | D \right |}}{2 \cdot \left | a \right |} $$</td>
                <td colspan="2">$$ \lambda_{1,2} = \frac{-b \pm \sqrt{D}}{2a} = -\frac{b}{2a} \pm i \frac{\sqrt{\left | D \right |}}{2 \cdot \left | a \right |} $$</td>
              </tr>
              <tr>
                <td width=21%>$$ \delta := \frac{b}{2a} $$</td>
                <td width=21%>$$ \omega_d := \frac{\sqrt{\left | D \right |}}{2 \cdot \left | a \right |} $$</td>
                <td>$$  \delta := \frac{b}{2a} $$</td>
                <td>$$ \omega_d := \frac{\sqrt{\left | D \right |}}{2 \cdot \left | a \right |} $$</td>
              </tr>
              <tr>
                <td width=21%>$$ y_1(x) = e^{\lambda_1 x} = e^{-\delta x - i \omega_d x} $$</td>
                <td width=21%>$$ y_2(x) = e^{\lambda_2 x} = e^{-\delta x + i \omega_d x} $$</td>
                <td>$$y_1(x) = e^{\lambda_1 x} = e^{-\delta x - i \omega_d x}  $$</td>
                <td>$$ y_2(x) = e^{\lambda_2 x} = e^{-\delta x + i \omega_d x} $$</td>
              </tr>
              <tr>
                <td width=42% colspan="2">$$ y(x) = c_1 y_1(x) + c_2  y_2(x) = C_1 e^{-\delta x - i \omega_d x} + C_2  e^{-\delta x + i \omega_d x}  $$</td>
                <td colspan="2">$$  $$</td>
              </tr>

              <tr>
                <td width=42% colspan="2">Exponentialform$$ y(x) =  e^{-\delta x} \cdot (C_1 \cdot e^{-i\omega_d x}+ C_2 \cdot e^{i\omega_d x}) $$</td>
                <td colspan="2">$$ $$</td>
              </tr>
              <tr>
                <td width=42% colspan="2">Cosinus Sinus Form$$ y(x) =  e^{-\delta x} (C \cdot \cos(\omega_d \cdot x )+ s \cdot \sin{\omega_d \cdot x})$$</td>
                <td>$$ C = y_0  $$</td>
                <td>$$ S = \frac{v_0 + \delta \cdot y_0}{\omega_d} $$</td>
              </tr>
              <tr>
                <td width=42% colspan="2">Sinus Phasen Form$$ y(x) = A \cdot e^{-\delta x}\cdot \sin(\omega_d \cdot x + \varphi_0)  $$</td>
                <td>$$ A = \sqrt{C^2 + S^2} $$</td>
                <td>$$ \varphi_0 = \text{arg}(s+i \cdot C)$$</td>
              </tr>
            </table>



            <br><br><h5 id="vsiualisierung">Visualisierung</h5>
            <table>
              <tr>
                <td width="20%" >Richtungsvektorfeld (RVF)</td>
                <td width="42%" >$$ \hat{v}(x;y) = \frac{1}{\sqrt{1+f^2(x;y)}} \begin{bmatrix}1\\f(x;y) \end{bmatrix} $$</td>
                <td><img src="bilder/differentialrechnung/gleichung/vis.png"style="max-height:50%; max-width:100%"></td>
              </tr>
              <tr>
                <td rowspan="2">Stabilitätseigenschaften</td>
                <td>stabil $$ \text{globaler Attraktor} $$</td>
                <td rowspan="2">Die <b>Stabilität</b> der statischen Lösung kann anhand des RVF beurteilt werden.<br><br><img src="bilder/differentialrechnung/gleichung/stab.png"style="max-height:50%; max-width:100%"></td>
              </tr>
              <tr>
                <td>labil $$ \text{globaler Repellor} $$ $$ \text{3. Beispiel} $$</td>
              </tr>
            </table>
            <!--
            <br><br><h5 id="separation_der_variablen">Separation der Variablen</h5>
            <table>
              <tr>
                <td width="20%" rowspan="4">Allgemeine Lösung</td>
                <td width="42%">ODE $$ y' = x^2 \cdot y $$</td>
                <td>separierbar</td>
              </tr>
              <tr>
                <td>S1: Statische Lösungen $$ y_s(x) = 0 $$</td>
                <td>y' ist 0 was muss y sein, damit die Gleichung stimmt?</td>
              </tr>
              <tr>
                <td>
                  S2: Nichtstatische Lösungen 
                  $$ y' = x^2 \cdot y \qquad \mid \; \: :y$$
                  $$ \frac{1}{y}\cdot y' = x^2 \qquad \mid \; \: \smallint ...\text{ d}x $$
                  $$ \smallint \frac{1}{y}\cdot y' \text{ d}x = \smallint x^2 \text{ d}x \qquad \mid \; \: y' = \frac{\text{ d}y}{\text{ d}x}$$
                  $$ \smallint \frac{1}{y} \text{ d}y = \smallint x^2 \text{ d}x \qquad \mid \; \: \small \text{aufleiten} $$
                  $$ \ln(\left | y \right |) = \frac{1}{3} x^3 + c \qquad \mid \; \: e^{...}$$
                  $$ \left | y \right | = e^{\normalsize\frac{1}{3}x^3+c}   $$
                  $$ y = \pm \; e^{ \normalsize c}\cdot e^{\normalsize\frac{1}{3}x^3} $$
                </td>
                <td>Beispiel mit allen Schritten:</td>
              </tr>
              <tr>
                <td>
                  S3: Allgemeine Lösung
                  $$ y(x) = C \cdot e^{\normalsize\frac{1}{3}x^3} \; \; \mid \; \: C \in \mathbb{R} $$
                </td>
                <td></td>
              </tr>

              <tr>
                <td rowspan="3">Spezielle Lösung</td>
                <td>IVP$$ \left\{\begin{matrix}\; \; \;\text{ODE}: y' = g(x) \cdot h(y)\\ \text{IC}: y(x_0) = y_0\end{matrix}\right. $$</td>
                <td></td>
              </tr>
              <tr>
                <td>
                  S1: Statische Lösungen
                  $$ 0 = h(y_s) $$
                  $$ y_s \in \left \{ ... \right \} $$
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  S2: Nichtstatische Lösungen
                  $$ y' = g(x) \cdot h(y) $$
                  $$ \frac{1}{h(x)}\cdot y' = g(x) $$
                  $$ \int_{x_0}^x \frac{1}{h(x)} \cdot  y' \text{ d}x = \int_{x_0}^{x}g(x) \text{ d}x $$
                  $$ \int_{y_0}^y \frac{1}{h(x)}  \text{ d}y = \int_{x_0}^{x}g(x) \text{ d}x $$
                  $$ \text{F}(y)-\text{F}(y_0) = \text{G}(x)-\text{G}(x_0) $$
                  $$ y(x) = ... $$
                </td>
                <td></td>
              </tr>
            </table>
              -->
            <br><br><h5 id="anwendungen">Anwendungen</h5>
            <table>
              <tr>
                <td rowspan="4" width="20%">Schaltkreise</td>
                <td width="42%">$$ U_R = R \cdot I $$</td>
                <td>
                  <img src="bilder/differentialrechnung/anwendungen/r.png"style="max-height:50%; max-width:100%"><br>
                  <b>U</b> = Spannung [N·m/C] = [V]<br>
                  <b>R</b> = Widerstand [Ω]<br>
                  <b>I</b> = Strom [A] <br>
                </td>
              </tr>
              <tr>
                <td>$$ U_L = L \cdot \dot{I} $$</td>
                <td>
                  <img src="bilder/differentialrechnung/anwendungen/l.png"style="max-height:50%; max-width:100%"><br>
                  <b>U</b> = Spannung [N·m/C] = [V]<br>
                  <b>L</b> = Induktivität (Henry) [H] = [V·s/A]<br>
                  <b>I</b> = Strom [A] <br>
                </td>
              </tr>
              <tr>
                <td>$$ U_C = \frac{Q}{C} \; \qquad  \: I = \dot{Q} $$</td>
                <td>
                  <img src="bilder/differentialrechnung/anwendungen/c.png"style="max-height:50%; max-width:100%"><br>
                  <b>U</b> = Spannung [N·m/C] = [V]<br>
                  <b>Q</b> = Ladung [A⋅s] = [C]</br>
                  <b>C</b> = Kapazität (Farad) [C/V] = [F]<br>
                </td>
              </tr>
              <tr>
                <td>
                  Maschenregel
                  $$ U_c + U_R = U(t) $$
                  $$ U_c + R \cdot I = U(t) $$
                  $$ U_c + R \cdot \dot{Q} = U(t) $$
                  $$ U_c + R \cdot C \cdot \dot{U_c} = U(t) $$
                  $$ \rightarrow \small\text{ODE  für } \; \normalsize\dot{U_c} $$
                </td>
                <td>Beispiel: RC-Kreis<img src="bilder/differentialrechnung/anwendungen/beispiel.png"style="max-height:50%; max-width:100%"></td>
              </tr>
            </table>
            <table>
              <tr>
                <td rowspan="4" width="20%">Toricelli-Probleme</td>
                <td width="42%">
                  Ausflussgeschwindigkeit
                  $$ v = \sqrt{2 \cdot g \cdot h} $$
                </td>
                <td rowspan="2" >Situation:<img src="bilder/differentialrechnung/anwendungen/torricelli.png"style="max-height:50%; max-width:100%"></td>
              </tr>
              <tr>
                <td>
                  Volumenfluss
                  $$ Q := \frac{\delta V}{\delta t} = \frac{A \cdot \delta l}{\delta t} = A \cdot v = \Phi_{\vec{v}} $$
                </td>
              </tr>
              <tr>
                <td>
                  Bilanz-Gleichung
                  $$ \dot{V}(t) = Q_i(t)-Q_a(t) $$
                  $$ A \cdot \dot{h}(t) = Q_i(t)-A_a \cdot \sqrt{2 \cdot g\cdot h(t)} $$
                  $$ \dot{h}(t) = \frac{1}{A}Q_i(t) - \frac{Aa}{A}\cdot \sqrt{2 \cdot g \cdot h(t)} $$
                  $$  $$
                </td>
                <td></td>
              </tr>
              <tr>
                <td>
                  IVP
                  $$ \left\{\begin{matrix}\text{ODE}: \dot{h}(t) = \frac{1}{A}Q_i(t) - \frac{Aa}{A}\cdot \sqrt{2 \cdot g \cdot h(t)} \\ \text{IC}: h(t_0) = h_0 \kern{31mm}  \end{matrix}\right. $$
                </td>
                <td></td>
              </tr>
            </table>

            <table>
              <tr>
                <td rowspan="3" width="20%">Mechanik</td>
                <td width="42%">
                  Newton-Aktionsprinzip
                  $$ m \cdot a = F = F_1 + ... + F_n $$
                </td>
                <td rowspan="1" >Situation:<img src="bilder/differentialrechnung/anwendungen/mechanik.png"style="max-height:50%; max-width:90%">Beispiel: Fallender Stein mit Luftwiderstand.</td>
              </tr>
                <td>
                  Fall F<sub>1</sub> - F<sub>n</sub> sind wegabhängig
                  $$ m \cdot \ddot{s} = f_1(s) + ... + F_n(s)  $$
                </td>
                <td>ODE 2. Grades für s(t)</td>
              </tr>
              </tr>
                <td>
                  Fall F<sub>1</sub> - F<sub>n</sub> sind geschwindigkeitsabhängig
                  $$ m \cdot \dot{v} = f_1(v) + ... + F_n(v)  $$
                </td>
                <td>ODE 1. Grades für v(t)</td>
              </tr>
            </table>

            <br><br><h5 id="tools">Tools</h5>
              <table class="table">
                  <tr>
                    <td rowspan="3" width=20%>Wolframalpha / Mathematica</td>
                    <td width=42%><p>Ableitung</p><figure class="highlight"><pre><code class="language-html" data-lang="html">D[2 x^2, x]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td width=42%><p>Differentialgleichung Auflösen</p><figure class="highlight"><pre><code class="language-html" data-lang="html">DSolve[{y''[x] + 4*y'[x]+ 5*y[x] == 0, 
y[0] == Pi, y'[0] == 0}, y[x], x]</code></pre></figure></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>
                    <p>Vektorfeld Plot</p>
                    <figure class="highlight"><pre><code class="language-html" data-lang="html">VectorPlot[{1, 1 - y^2}, {x, 0, 6}, {y, -2, 2},
 VectorPoints -> 25,
 VectorScale -> {0.02, 0.8, None},
 GridLinesStyle -> LightGray,
 GridLines -> Automatic,
 AspectRatio -> Automatic,
 FrameLabel -> {{"y", None}, {"x", "Figure 1"}}]</code></pre></figure>
                  </td>
                  <td></td>
                  </tr>
                  <tr>
                    <td>Matlab</td>
                    <td><p>Vektorfeld Plot</p><figure class="highlight">
                  <pre><code class="language-html" data-lang="html">
<font color="green">% MATLAB initialisieren:</font>
clear <font color="#8A0A8A">all</font>; clc; format <font color="#8A0A8A">compact</font>; format <font color="#8A0A8A">short g</font>;

<font color="green">% Paramter:</font>
    x_0=0; <font color="green">% erster X Wert</font>
    x_E=6; <font color="green">% letzter X Wert</font>
    y_0=-2; <font color="green">% erster Y Wert</font>
    y_E=2; <font color="green">% letzter Y Wert</font>
    N_x=25; <font color="green">% anzahl Werte, die generiert werden in X</font>
    N_y=25; <font color="green">% anzahl Werte, die generiert werden in Y</font>
    fig=1; <font color="green">% Figur 1</font>
    scale=0.5; <font color="green">% Skalierung</font>
    
<font color="green">% Funktionen:</font>
f=@(x,y)1.-y.^2; <font color="green">% hier die Funktion aendern</font>
v=@(x,y){1./sqrt(1+f(x,y).^2);f(x,y)./sqrt(1+f(x,y).^2)};

<font color="green">% Daten:</font>
x_data=linspace(x_0,x_E,N_x);
y_data=linspace(y_0,y_E,N_y);
[x_grid,y_grid]=meshgrid(x_data,y_data);
v_grid=v(x_grid,y_grid);

<font color="green">% Plot:</font>
figure(fig);
quiver(x_grid,y_grid,v_grid{1},v_grid{2},scale);
xlabel(<font color="#8A0A8A">'x'</font>); ylabel(<font color="#8A0A8A">'y'</font>);
grid <font color="#8A0A8A">on</font>;
axis(<font color="#8A0A8A">'image'</font>);</code>
                  </pre>
                </figure></td>
                    <td><img src="bilder/differentialrechnung/matlab/matlab.png"style="max-height:50%; max-width:100%"></td>
                  </tr>
              </table>

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>