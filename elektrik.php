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
            <li class="toc-entry toc-h2"><a href="#eFeld_von_ruhenden_ladungen">E-Feld von ruhenden Ladungen</a></li>
            <li class="toc-entry toc-h2"><a href="#spannung_und_potential">Spannungen & Potential</a></li>
            <li class="toc-entry toc-h2"><a href="#elementarladung">Elementarladung</a></li>
            <li class="toc-entry toc-h2"><a href="#elementarteilchen">Elementarteilchen</a></li>
            <li class="toc-entry toc-h2"><a href="#elektorstatik">Elektrostatik</a></li>
            <li class="toc-entry toc-h2"><a href="#magnetostatik">Magnetostatik</a></li>
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
                    <td>$$ q_{e^-} = -1.602176634 \cdot 10^{-19}$$</td>
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
                      <b>Q</b> = Ladung [A·s] = [C]<br>
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
                      <b>Situation: </b> Zwei ruhende Punktladungen
                      <img src="bilder/elektrik/ladung_strom/coulomb_gesetz.png"style="max-height:40%; max-width:100%"><br>
                      <b>F<sub>E</sub></b> = Elektrische Kraft [N]<br>
                      <b>γ<sub>E</sub></b> = Coulomb Konstante [A·s/(V·m)] = [A<sup>2</sup>·s<sup>4</sup>/(kg·m<sup>3</sup>)]<br>
                      <b>Q<sub>1</sub></b> = Ladung 1 [A·s] = [C]<br>
                      <b>Q<sub>2</sub></b> = Ladung 2 [A·s] = [C]<br>
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
                      <b>Situation: </b> Zwei ruhende, zeitlich konstante, parallele, unendlich lange Ströme.
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
                    <b>q</b> = Probeladung [A·s] = [C]
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
                    <b>q</b> = Probeladung [A·s] = [C]<br>
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
                     <b>Q</b> = Ladung [A·s] = [C]<br>
                     <b>E</b> = Elektrisches Feld [N/C]<br>
                     <b>v</b> = Geschwindigkeit [m/s]<br>
                     <b>B</b> = Magnetisches Feld (Tesla) [T] = [N/(A·m)]
                  </td>
                </tr>
                <tr>
                  <td>$$ P_{EB} = Q \cdot \left \langle \vec{E},\vec{v} \right \rangle \\ \text{ } \\ P_{EB} = \left \langle \vec{F}_{EB},\vec{v} \right \rangle $$</td>
                  <td>
                    <b>P<sub>EB</sub></b> = Leistung des E-B-Feldes [W]<br>
                    <b>Q</b> = Ladung [A·s] = [C]<br>
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

              <br><br><h5 id="eFeld_von_ruhenden_ladungen">E-Feld von ruhenden Ladungen</h5>

              <table>
                <tr>
                    <td width=20%>E-Felder einer Punktladung<br>(ruhend)</td>
                    <td width=42%>$$ \vec{E} = \frac{1}{4\pi\varepsilon _0}\cdot \frac{Q}{r^2}\cdot \hat{r} = \frac{1}{4\pi \varepsilon _0} \cdot \frac{Q}{r^3}\cdot \vec{r} $$</td>
                    <td>
                      <b>Situation: </b>Das E-Feld im Abstand r von einer ruhenden Punktladung Q ist:
                      <img src="bilder/elektrik/efeld_ruhende_ladungen/situation.png"style="max-height:40%; max-width:100%"><br><br>
                      <b>E</b> = Elektrisches Feld [N/C]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
                      <b>Q</b> = Ladung [A·s] = [C]<br>
                      <b>r</b> = Abstand der Massenmittelpunkte [m]<br>
                      <b>r</b> = Richtungsvektor [-]
                    </td>
                  </tr>
                  <tr>
                    <td>E-Feld von n Punktladungen</td>
                    <td>$$ \vec{E} = \frac{1}{4\pi\varepsilon _0} \; \sum_{k=1}^{n} \;\frac{Q_k}{r_{k}^{3}} \cdot \vec{r}_k $$</td>
                    <td><img src="bilder/elektrik/efeld_ruhende_ladungen/nPunktladungen.png"style="max-height:40%; max-width:80%"><br><br>P ist der Beobachtungspunkt</td>
                  </tr>
              </table>

              <br><br><h5 id="spannung_und_potential">Spannungen & Potential</h5>

              <table>
                <tr>
                    <td rowspan="2" width=20%>Elektrische Spannung<br>(entlang des Weges)</td>
                    <td width=42%>$$ U := \frac{1}{q} \cdot \Delta W $$</td>
                    <td><b>Situation: </b>Probeladung bewegt sich entlang eines Weges durch das E-Feld.<img src="bilder/elektrik/spannung_und_potential/elektrische_spannung.png"style="max-height:40%; max-width:100%">
                      <b>U</b> = Spannung [N·m/C] = [V]<br>
                      <b>q</b> = Probeladung [A·s] = [C]<br>
                      <b>W</b> = Arbeit [N·m] = [J]<br>
                    </td>
                  </tr>
                  <tr>
                    <td>$$ U := \int_{s_0}^{s_E}\left \langle \vec{E},\hat{e} \right \rangle \text{d}s $$</td>
                    <td>
                      <b>U</b> = Spannung [N·m/C] = [V]<br>
                      <b>E</b> = Elektrisches Feld [N/C]<br>
                      <b>e</b> = Bahnvektor (Einheitsvektor) [-]<br>
                      <b>s</b> = Strecke [m]<br>
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="2">Elektrisches Potential<br>(ruhende Ladungen)</td>
                    <td>$$ \small \text{falls  }\; \normalsize \dot{\vec{B}} = 0 $$</td>
                    <td>Dann hängt die elektrische Spannung jedes Weges nur von dessen Anfangs- und Endpunkt ab.</td>
                  </tr>
                  <tr>
                    <td>$$ \oint \vec{E}\cdot \text{d}\vec{s} = 0 $$</td>
                    <td>Für alle geschlossenen Wege.</td>
                  </tr>
                  <tr>
                    <td rowspan="3">Konstruktion einer Potentialfunktion</td>
                    <td>$$ P_0 = (x_0;x_0;z_0) $$</td>
                    <td>Referenzpunkt</td>
                  </tr>
                  <tr>
                    <td>$$ \phi \in \mathbb{R}\left [ V \right ] $$</td>
                    <td>Referenzpotential</td>
                  </tr>
                  <tr>
                    <td>$$ \phi :\mathbb{R}^3 \left [ m \right ] \rightarrow \left [ V \right ] \\ \text{} \\ (x;y;z) x \mapsto \phi (x;y;z) := \phi _0 + U $$</td>
                    <td>U entlang eines Weges von P<sub>0</sub> nach (x;y;z) oder umgekehrt.</td>
                  </tr>
                  <tr>
                    <td rowspan="2">Potential in der Praxis</td>
                    <td>Elektrotechnik:$$ U_{12} = \pm  \Delta \phi = \pm (\phi _2-\phi _1) $$</td>
                    <td><img src="bilder/elektrik/spannung_und_potential/beispiel.png"style="max-height:40%; max-width:100%"><br>Vorzeichen ja nach Variante beachten.</td>
                  </tr>
                  <tr>
                    <td>Elektrostatik: $$  \phi (r) = \frac{1}{4\pi\varepsilon _0}\frac{Q}{r} $$</td>
                    <td><img src="bilder/elektrik/spannung_und_potential/elektrostatik.png"style="max-height:40%; max-width:100%"><br>So viel beträgt das elektrische Potential einer Punktladung Q im abstand r > 0.</td>
                  </tr>
                  <tr>
                    <td>Potentielle Energie</td>
                    <td>$$ E_{pot} = q_{e^-} \cdot \phi(P) $$</td>
                    <td> 
                      <b>E<sub>pot</sub></b> = Potentielle Energie [Nm] = [J]<br>
                    </td>
                  </tr>
                  <tr>
                    <td>Mehrere Punktladungen</td>
                    <td>$$ \phi(P) =  \frac{1}{4\pi\varepsilon _0} \sum_{k=1}^{n}  \frac{Q_k}{r_k}$$</td>
                    <td> 
                      <b>ϕ</b> = Referenzpotential am Punkt P [V] <br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante (Vakuum) [A·s/(V·m)] = [F/m] <br>
                      <b>Q</b> = Ladung [A·s] = [C]<br>
                      <b>r</b> = Abstand der Massenmittelpunkte [m]<br>
                    </td>
                  </tr>
              </table>

              <br><br><h5 id="elementarladung">Elementarladung</h5>
                <table>
                  <tr>
                    <td width=20%>Elementarladung</td>
                    <td width=42%>$$ e = 1.602'176'634 \cdot 10^{-19} \;C $$</td>
                    <td>Jede freie elektrische Ladung ist ein ganzzahliges Vielfaches der Elementarladung.</td>
                  </tr>
                  <tr>
                    <td>Ladungszahl</td>
                    <td>$$ Q = Z \cdot e $$</td>
                    <td>
                      <b>Q</b> = Ladung [A·s] = [C]<br>
                      <b>Z</b> = Ladungszahl [-]<br>
                      <b>e</b> = Elementarladungen [A·s] = [C]<br>
                    </td>
                  </tr>
                  <tr>
                    <td>Faraday-Konstante</td>
                    <td>$$ Q_A : = N_A \cdot e \approx  9.649 \cdot 10^4 \; \scriptsize \frac{\text{C}}{\text{mol}} $$</td>
                    <td>Es beschreibt die Ladung eines Mols Protonen.<br>
                      <b>Q<sub>A</sub></b> = Faraday-Konstante [C/mol]<br>
                      <b>N<sub>A</sub></b> = Avogadro-Konstante [1/mol]<br>
                      <b>e</b> = Elementarladungen [A·s] = [C]
                    </td>
                  </tr>
                  <tr>
                    <td>Teilchenbschleunigung</td>
                    <td>$$ E_{kin} = U \cdot q = U \cdot e $$</td>
                    <td>
                      <img src="bilder/elektrik/elementarladungen/teilchenbeschleunigung.png"style="max-height:40%; max-width:100%"><br><br>
                      <b>E<sub>kin</sub></b> = Beschleunigungsarbeit [Nm] = [J]<br>
                      <b>U</b> = Spannung [N·m/C] = [V]<br>
                      <b>q</b> = Probeladung [A·s] = [C]<br>
                      <b>e</b> = Elementarladungen [A·s] = [C]

                      
                  </td>
                  </tr>
                  <tr>
                    <td>Elektronvolt</td>
                    <td>$$1eV := e \cdot 1V \approx 1.602 \cdot 10^{-19} \; J $$</td>
                    <td>eV ist eine Energie-Einheit. 1eV ist die kinetische Enerige eines Teilchen mit Ladung ±e nach Beschleunigung mit Spannung ±1V.</td>
                  </tr>
                </table>


            <br><br><h5 id="elementarteilchen">Elementarteilchen</h5>
              <table>
                <tr>
                  <td width=20%>Elektron: <b>e<sup>-</sup></b></td>
                  <td width=42%>$$ Z_{e^-} = -1 $$</td>
                  <td>$$q_{e^-} = -e $$</td>
                </tr>
                <tr>
                  <td>Positron: <b>e<sup>+</sup></b></td>
                  <td>$$ Z_{e^+} = + 1$$</td>
                  <td>$$q_{e^+} = +e $$</td>
                </tr>
                <tr>
                  <td>Photon: <b>γ</b></td>
                  <td>$$ Z_{\gamma } = 0$$</td>
                  <td>$$q_{\gamma } = 0 $$</td>
                </tr>
                <tr>
                  <td>Proton: <b>p<sup>+</sup></b></td>
                  <td>$$ Z_{p^+ } = 1$$</td>
                  <td>$$q_{p^+ } = +e $$</td>
                </tr>
                <tr>
                  <td>Neutron: <b>n</b></td>
                  <td>$$ Z_{n} = 0 $$</td>
                  <td>$$q_{n} = 0 $$</td>
                </tr>
              </table>

             <br><br><h5 id="elektrostatik">Elektrostatik</h5>

             <table>
                <tr>
                  <td rowspan="2" width=20%>E-Feld aus ACR-Prozess</td>
                  <td width=42%>S1 Lokal:$$ \delta \vec{E} \approx \frac{1}{4 \pi \varepsilon _0}\cdot  \frac{\delta Q}{r^2} \cdot \hat{r} = \frac{1}{4 \pi \varepsilon _0}\cdot  \frac{\delta Q}{r^3} \cdot \vec{r} $$</td>
                  <td rowspan="2"><img src="bilder/elektrik/elektrostatik/acr-prozess.png"style="max-height:40%; max-width:100%"><br>
                      <b>E</b> = Elektrisches Feld [N/C]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
                      <b>Q</b> = Ladung [A·s] = [C]<br>
                      <b>r</b> = Abstand der Massenmittelpunkte [m]<br>
                      <b>r</b> = Richtungsvektor [-]
                  </td>
                </tr>
                <tr>
                  <td>S2 Global: $$ \vec{E} = \int _G \frac{1}{4 \pi \varepsilon _0} \cdots \text{ d}G =  $$</td>
                </tr>
                <tr>
                  <td>Satz von Gauss</td>
                  <td>$$ \Phi _{\vec{E}} = \oint _M \left \langle \vec{E},\hat{n} \right \rangle \text{ d}A = \frac{1}{\varepsilon _0}\cdot Q_{eg} $$</td>
                  <td>Ladungen im Bereich einer geschlossenen Fläche.<img src="bilder/elektrik/elektrostatik/gauss.png"style="max-height:40%; max-width:80%"><br><br>
                    <b>Φ<sub>E</sub></b> = Fluss des Vektorfeldes [V·m]<br>
                    <b>E</b> = Elektrisches Feld [N/C]<br>
                    <b>n</b> = Einheitsnormalenvektor []<br>
                    <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
                    <b>Q</b> = Totale eingeschlossene Ladung [A·s] = [C]<br>
                  </td>
                </tr>
                <tr>
                  <td rowspan="2">Kapazitäten</td>
                  <td>$$ C := \frac{Q}{U} = \small \frac{\text{verschobene Ladung}}{\text{angelegte Spannung}} $$</td>
                  <td rowspan="2">Kondensator:<br><img src="bilder/elektrik/elektrostatik/kapazitaet.png"style="max-height:40%; max-width:70%"><br><br>
                    <b>C</b> = Kapazität (Farad) [C/V] = [F]<br>
                    <b>Q</b> = Totale eingeschlossene Ladung [A·s] = [C]<br>
                    <b>U</b> = Spannung [N·m/C] = [V]<br>
                  </td>
                </tr>
                <tr>
                  <td>Die Kapazität C hängt nich von U bzw. Q sonder nur von der Bauweise des Kondensators ab. C ist eine Geräte kennzahl.</td>
                </tr>
                <tr>
                  <td>Kinetische Energie (Kondensator)</td>
                  <td>$$ W_C = \frac{1}{2} \cdot C \cdot U^2 = \frac{1}{2 \cdot C}\cdot Q^2 $$</td>
                  <td>
                    <b>W<sub>C</sub></b> = Kinetische Energie im Kondensator [N·m] =[J]<br>
                    <b>C</b> = Kapazität (Farad) [C/V] = [F]<br>
                    <b>U</b> = Spannung [N·m/C] = [V]<br>
                    <b>Q</b> = Totale eingeschlossene Ladung [A·s] = [C]
                  </td>
                </tr>
                <tr>
                  <td>Energie-Dichte</td>
                  <td>$$ W_E = \frac{1}{2} \cdot \varepsilon_0 \cdot E^2 $$</td>
                  <td>
                    <b>W<sub>E</sub></b> = Energie-Dichte [N·m] =[J]<br>
                    <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
                    <b>E</b> = Elektrisches Feld [N/C]
                  </td>
                </tr>
                <tr>
                  <td rowspan="5">Plattenkondensator</td>
                  <td>Zwischen den Platten bildet sich ein nahezu homogenes E-Feld: $$ \vec{E} = E \cdot \hat{e}$$</td>
                  <td rowspan="2"><img src="bilder/elektrik/elektrostatik/plattenkondensator.png"style="max-height:40%; max-width:80%"><br>
                    <b>E</b> = Elektrisches Feld [N/C]<br>
                    <b>d</b> = Abstand der Platten [m]<br>
                    <b>A</b> = Fläche der Kondensatorplatte [m<sup>2</sup>]<br>
                    <b>U</b> = Spannung [N·m/C] = [V]<br>
                    <b>Q</b> = Totale eingeschlossene Ladung [A·s] = [C]<br>
                  </td>
                </tr>
                <tr>
                  <td>Ausserhalb der Platten gilt: $$ \vec{E} \approx 0 $$</td>
                </tr>
                <tr>
                  <td>$$ E = \frac{1}{\varepsilon_0} \cdot \frac{Q}{A} $$</td>
                  <td rowspan="3">Folgende drei Gleichungen gelten in guter Näherung für: $$ d^2 \ll A $$</td>
                </tr>
                <tr>
                  <td>$$ U = E \cdot U $$</td>
                  
                </tr>
                <tr>
                  <td>$$ C = \varepsilon_0 \cdot \frac{A}{d} $$</td>
                </tr>
              </table>
          <br><br><h5 id="magnetostatik">Magnetostatik</h5>
          <table>
            <tr>
              <td rowspan="3" width=20%>Ampère-Durchflutungsgesetz <br>(konstantes E-Feld)</td>
              <td width=42%>$$ \Upsilon _{\vec{B}} = \oint _\gamma \left \langle \vec{B},\hat{e} \right \rangle \text{d}s = \mu _0 \cdot I_{eg} $$</td>
              <td>
                <img src="bilder/elektrik/magnetostatik/ampere.png"style="max-height:40%; max-width:80%"><br>
                <b><img src="bilder/elektrik/magnetostatik/durchflutung.png" height="20"></b> = Zirkulation [N/A]<br>
                <b>B</b> = Magnetisches Feld (Tesla) [T] = [N/(A·m)]<br>
                <img src="bilder/vektoranalysis/hauptsaetze/e.png" height="17"> = Richtungsvekotr<br>
                <b>μ<sub>0</sub></b> = Magnetische Feldkonstante = 4·π·10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                <b>I<sub>eg</sub></b> = Total eingeschlossener Strom [A]
              </td>
            </tr>
            <tr>
              <td>Anwendung 1: Langer gerader Strom $$ \text{ } \\ B(r) = \frac{\mu_0}{2 \pi} \cdot \frac{I}{r} $$</td>
              <td>
                Situation: Strom kommt rechtwinklich aus Zeichenebene.
                <img src="bilder/elektrik/magnetostatik/kreis.png"style="max-height:40%; max-width:70%"><br>
                <b>B</b> = Magnetisches Feld (Tesla) [T] = [N/(A·m)]<br>
                <b>μ<sub>0</sub></b> = Magnetische Feldkonstante = 4·π·10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                <b>I</b> = Strom [A]<br>
                <b>r</b> = Radius [m]
              </td>
            </tr>
            <tr>
              <td>Anwendung 2: Lange dünne Spule $$ \text{ } \\ B \approx  \mu_0 \cdot N \cdot \frac{I}{l} $$</td>
              <td>
                <img src="bilder/elektrik/magnetostatik/spule.png"style="max-height:40%; max-width:70%"><br>
                <b>B</b> = Magnetisches Feld (Tesla) [T] = [N/(A·m)]<br>
                <b>μ<sub>0</sub></b> = Magnetische Feldkonstante = 4·π·10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                <b>N</b> = Wicklungen [-]<br>
                <b>I</b> = Strom [A]<br>
                <b>l</b> = Länge [m]
              </td>
            </tr>
            <tr>
              <td rowspan="2">Biot-Savart-Gesetz</td>
              <td>
                $$ \delta \vec{B} = \frac{\mu_0}{4 \pi} \cdot I \cdot \frac{1}{r^2}\cdot \hat{e}_s \times \hat{r} \cdot \delta s$$
                $$ \delta \vec{B} = \frac{\mu_0}{4 \pi} \cdot I \cdot \frac{1}{r^2}\cdot \vec{v} \times \hat{r} \cdot \delta \tau $$
                $$ \delta \vec{B} = \frac{\mu_0}{4 \pi} \cdot I \cdot \frac{1}{r^3}\cdot \hat{e}_s \times \vec{r} \cdot \delta s $$
                $$ \delta \vec{B} = \frac{\mu_0}{4 \pi} \cdot I \cdot \frac{1}{r^3}\cdot \vec{v} \times \vec{r} \cdot \delta \tau $$
              </td>
              <td>Der Beitrag des kleinen Stücks des Stroms mit Länge δs zum B-Feld am Punkt P ist:<img src="bilder/elektrik/magnetostatik/savart.png"style="max-height:40%; max-width:100%"><br>
                <b>B</b> = Magnetisches Feld (Tesla) [T] = [N/(A·m)]<br>
                <b>μ<sub>0</sub></b> = Magnetische Feldkonstante = 4·π·10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                <b>I</b> = Strom [A]<br>
                <b>r</b> = Radius [m]<br>
                <img src="bilder/vektoranalysis/hauptsaetze/e.png" height="17"> = Richtungsvekotr<br>
                <img src="bilder/elektrik/magnetostatik/r_hat.png" height="17"> = Einheitsvekotr zum Punkt P<br>
                <img src="bilder/elektrik/magnetostatik/r_vec.png" height="17"> = Vekotr zum Punkt P<br>
                <img src="bilder/elektrik/magnetostatik/v_vec.png" height="17"> = Geschwindigkeitsvekotr<br>
              </td>
              <tr>
                <td>Die Richtung des B-Feldes kann mit der Rechten-Hand-Regel bestimmt werden.</td>
                <td><b>Daumen</b> Stromrichtung<br><b>andere Finger</b> B-Feld-Richtung</td>
              </tr>
            </tr>
          </table>
        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>