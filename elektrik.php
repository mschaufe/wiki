<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "physik";
    ?>
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
          <?php include ('includes/nav_physik.php'); ?>
        </div>

        
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            <ul class="section-nav">
            <li class="toc-entry toc-h2"><a href="#ladung_und_strom">Ladung & Strom</a></li>
            <li class="toc-entry toc-h2"><a href="#elektromagnetische_felder">Elektromagnetische Felder</a></li>

            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Elektrik</h1>

          <p class="bd-lead">Der Begriff Elektrik ist die umgangssprachliche Bezeichnung für die Lehre von der Elektrizität.</p>

          <br><br><h5 id="ladung_und_strom">Ladung & Strom</h5>

          <table class="table">
                <thead>
                  <tr>
                    <th scope="col" width=20%>Bezeichnung</th>
                    <th scope="col" width=42%>Formel</th>
                    <th>Grafik</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <tr>
                    <td>Elektrischer Strom</td>
                    <td>$$ Q_e = -1.602176634 \cdot 10^{-19}$$</td>
                    <td><b>Q</b> = Ladung [C] = [A⋅s]</td>
                  </tr>
                  <tr >
                    <td rowspan="2"id="add_und_sub">Ladung <br>bei Stromstärke I = konstant</td>
                    <td>$$ Q = I\cdot \Delta t $$</td>
                    <td  rowspan="2" ><img src="bilder/elektrotechnik/ladung/strom_konstant.png"style="max-height:40%; max-width:100%"></td>
                  </tr>
                  <tr><td>Glühlampe oder beliebiger anderer Leiter im Gleichstromkreis</td></tr>
                  <tr >
                    <td rowspan="2" id="add_und_sub">Ladung <br>bei Stromstärke I ≠ konstant</td>
                    <td>$$ Q = \int_{t_{1}}^{t_{2}}I(t) \;dt $$</td>
                    <td  rowspan="2"><img src="bilder/elektrotechnik/ladung/strom_nicht_konstant.png"style="max-height:40%; max-width:100%"></td>
                  </tr>
                  <tr><td>Entladen eines Kondensators, Aufladen eines Akkumulators</td></tr>
                  <tr>
                    <td>Elektrischer Strom</td>
                    <td>$$I = \frac{\Delta Q}{\Delta t} = \frac{\text{geflossene Ladung}}{\text{benötigte Zeit}}$$</td>
                    <td>
                      <b>I</b> = Strom [A]<br>
                      <b>Q</b> = Ladung [C] = [A·s]<br>
                      <b>t</b> = Zeit [s]
                    </td>
                  </tr>
                  </tbody>
                </table>
                <table>
                  <tr >
                    <td width=20% rowspan="2">Coulomb-Gesetz<br>(ruhende Ladungen)</td>
                    <td width=42%>$$ \vec{F}_E = \gamma_E \cdot \frac{Q_{1}\cdot Q_{2}}{r^{2}} \cdot \hat{r}
                      =  \frac{1}{4\pi\varepsilon_0 }\frac{Q_{1}\cdot Q_{2}}{r^{2}} \cdot \hat{r} $$</td>
                    <td rowspan="2">
                      <img src="bilder/elektrik/ladung_strom/coulomb_gesetz.png"style="max-height:40%; max-width:100%"><br>
                      <b>F<sub>E</sub></b> = Elektrische Kraft [N]<br>
                      <b>γ<sub>E</sub></b> = Coulomb Konstante [A·s/(V·m)] = [A<sup>2</sup>·s<sup>4</sup>/(kg·m<sup>3</sup>)]<br>
                      <b>Q<sub>1</sub></b> = Ladung 1 [C] = [A·s]<br>
                      <b>Q<sub>2</sub></b> = Ladung 2 [C] = [A·s]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante (Vakuum) [A·s/(V·m)] = [F/m] <br>
                      <b>r</b> = Abstand der Massenmittelpunkte [m]<br> 
                      <b>r</b> = Richtungsvektor [-]<br>
                      <b>γ</b> = Konstante [1]
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <b>Vorzeichen:<br></b>
                      Gleiche Ladungen stossen sich ab. (+ +) oder (- -)<br>
                      Verschiedene Ladungen ziehen sich an. (+ -)
                    </td>
                  </tr>
                  <tr >
                    <td width=20% rowspan="2">Ampere-Gesetz</td>
                    <td width=42%>$$ \vec{F}_B = \gamma_B \cdot \frac{2l}{r}  \cdot I_1 \cdot I_2 \cdot \hat{r} = \mu_0 \frac{l}{2\pi r} \cdot I_1 \cdot I_2 \cdot \hat{r} $$</td>
                    <td rowspan="2">
                      <img src="bilder/elektrik/ladung_strom/ampere_gesetz.png"style="max-height:40%; max-width:100%"><br>
                      <b>F<sub>B</sub></b> = Magnetische Kraft [N]<br>
                      <b>γ<sub>B</sub></b> = Ampere Konstante ≈ 10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                      <b>I<sub>1</sub></b> = Strom 1 [A]<br>
                      <b>I<sub>2</sub></b> = Strom 2 [A]<br>
                      <b>l</b> = Abschnittslänge [m]<br>
                      <b>μ<sub>0</sub></b> = Magnetische Feldkonstante 4·π·10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                      <b>r</b> = Abstand der Massenmittelpunkte [m]<br>
                      <b>r</b> = Richtungsvektor [-]
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <b>Vorzeichen:<br></b>
                      Gleiche Ladungen ziehen sich an. (+ +) oder (- -)<br>
                      Verschiedene Ladungen stossen sich ab. (+ -)
                    </td>
                  </tr>
              </table>
              <table>
                <tr>
                    <td width=20%>Maxwell-Relation</td>
                    <td width=42%>$$ \frac{\gamma_E}{\gamma_B} = \frac{1}{\varepsilon _0\mu _0} = c^2$$</td>
                    <td>
                      <b>γ<sub>E</sub></b> = Coulomb Konstante [A·s/(V·m)] = [A<sup>2</sup>·s<sup>4</sup>/(kg·m<sup>3</sup>)]<br>
                      <b>γ<sub>B</sub></b> = Ampere Konstante ≈ 10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
                      <b>μ<sub>0</sub></b> = Magnetische Feldkonstante = 4·π·10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                      <b>c</b> = Lichtgeschwindigkeit [m/s]
                    </td>
                  </tr>
              </table>

              <br><br><h5 id="elektromagnetische_felder">Elektromagnetische Felder</h5>
              <table>
                <tr>
                  <td rowspan="3" width=20%>Prinzipien der Feldtheorie</td>
                  <td width=42%>Wirkungsbezug</td>
                  <td>Anhand der Wirkung auf ein Probeobjekt. <br>Z.B. Strömung Wasser → Fähnchen</td>
                </tr>
                <tr>
                  <td>Lokalität</td>
                  <td>Abhängig von der Zeit t und Ort (x;y;z)<br>→ Funktion von (t;x;y;z)</td>
                </tr>
                <tr>
                  <td>Autonomie</td>
                  <td>Unabhängig von den Eigenschaften des Probeobjekts.</td>
                </tr>
                <tr>
                  <td rowspan="2">Elektrisches Feld<br>Elektrische Feldstärke<br>E-Feld</td>
                  <td>$$ \vec{E}(t;x;y;z) := \frac{1}{q} \cdot \vec{F}_E (t;x;y;z)$$</td>
                  <td>
                    <b>E</b> = Elektrisches Feld [N/C]<br>
                    <b>F<sub>E</sub></b> = Elektrische Kraft [N]<br>
                    <b>q</b> = Probeladung [C] = [A·s]
                  </td>
                </tr>
                <tr>
                  <td>Wirkungsschema</td>
                  <td><img src="bilder/elektrik/elektromagnetische_felder/schema_eFeld.png"style="max-height:40%; max-width:100%"></td>
                </tr>
                <tr>
                  <td rowspan="2">Magnetisches Feld<br>Magnetische Feldstärke<br>Magnetische Flussdichte<br>B-Feld</td>
                  <td>$$ \vec{F}_B (t;x;y;z) = q \cdot \vec{v} \times \vec{B}(t;x;y;z)$$</td>
                  <td>
                    <b>F<sub>B</sub></b> = Magnetische Kraft [N]<br>
                    <b>q</b> = Probeladung [C] = [A·s]<br>
                    <b>v</b> = Geschwindigkeit [m/s]<br>
                    <b>B</b> = Magnetisches Feld (Tesla) [T] = [N/(A·m)]
                  </td>
                </tr>
                <tr>
                  <td>Wirkungsschema</td>
                  <td><img src="bilder/elektrik/elektromagnetische_felder/schema_bFeld.png"style="max-height:40%; max-width:100%"></td>
                </tr>
                <tr>
                  <td rowspan="3">Lorenz-Gleichungen</td>
                  <td>$$ \vec{F}_{EB} = Q \cdot (\vec{E}+\vec{v}\times \vec{B})  $$</td>
                  <td>
                     <b>F<sub>EB</sub></b> = Kraft des E-B-Feldes [N]<br>
                     <b>Q</b> = Ladung [C] = [A·s]<br>
                     <b>E</b> = Elektrisches Feld [N/C]<br>
                     <b>v</b> = Geschwindigkeit [m/s]<br>
                     <b>B</b> = Magnetisches Feld (Tesla) [T] = [N/(A·m)]
                  </td>
                </tr>
                <tr>
                  <td>$$ P_{EB} = Q \cdot \left \langle \vec{E},\vec{v} \right \rangle \\ \text{ } \\ P_{EB} = \left \langle \vec{F}_{EB},\vec{v} \right \rangle $$</td>
                  <td>
                    <b>P<sub>EB</sub></b> = Leistung des E-B-Feldes [W]<br>
                    <b>Q</b> = Ladung [C] = [A·s]<br>
                    <b>E</b> = Elektrisches Feld [N/C]<br>
                    <b>v</b> = Geschwindigkeit [m/s]<br>
                    <b>F<sub>EB</sub></b> = Kraft des E-B_Feldes [N]<br>
                  </td>
                </tr>
                <tr>
                  <td>Bemerkung</td>
                  <td>Wegen v ⊥ F<sub>B</sub> leistet das B-Feld keine Arbeit an einer Ladung.
                  </td>
                </tr>
              </table>

         
        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>