# Übung Subnetting

## Übung 1

Bilde aus dem Netz 192.168.0.0 /24 4 Subnetze. Netze mit Mindestzahl an nutzbaren Host aber nicht darunter wählen: Netz a mit 20, Netz b mit 15, Netz c mit 30, und das Netz d mit den Rest Anteil der Netzwerkadressen.

**Antwort**
Netz A 
Subnetzmaske: /27
Netzwerkadresse: 192.168.0.0
Hosts: 30
Broadcastadresse: 192.168.0.31

Netz B
Subnetzmaske: /27
Netzwerkadresse: 192.168.0.32
Hosts: 30
Broadcastadresse: 192.168.0.63

Netz C 
Subnetzmaske: /26
Netzwerkadresse: 192.168.0.64
Hosts: 62
Broadcastadresse: 192.168.0.127

Netz D 
Subnetzmaske: /25
Netzwerkadresse: 192.168.0.128
Hosts: 126
Broadcastadresse: 192.168.0.255

## Übung 2

Teile das Netz 193.170.20.0 /24 in 8 gleich große Netze! Erstelle eine Tabelle mit folgenden Angaben:
Netzwerkadresse,               nutzbare Hosts,                    Broadcastadresse,              Subnetzmaske.

**Antwort**
Netzwerkadresse               nutzbare Hosts                    Broadcastadresse              Subnetzmaske
193.170.20.0                  .1-.30                            .31                           /27
193.170.20.32                 .33-.62                           .63                           /27
193.170.20.64                 .65-.94                           .95                           /27
193.170.20.96                 .97-.126                          .127                          /27
193.170.20.128                .129-.158                         .159                          /27
193.170.20.160                .161-.190                         .191                          /27
193.170.20.192                .193-.222                         .223                          /27
193.170.20.224                .225-.254                         .255                          /27

## Übung 3

172.28.40.0 /26 Teile wie folgt auf: 2 Netze!
Erstelle eine Tabelle mit folgenden Angaben:
Netzwerkadresse,               nutzbare Hosts,                    Broadcastadresse,              Subnetzmaske.

**Antwort**
Netzwerkadresse               nutzbare Hosts                    Broadcastadresse              Subnetzmaske
172.28.40.0                   .1-.30                            .31                           /27
172.28.40.32                  .33-.62                           .63                           /27

## Übung 4

Wie lautet die Subnetzmaske bei der Netzadresse: 17.0.0.0 mit 10 verwendbaren Subnetzen, sowie mit mindestens 12 Hosts je Subnetz?
Antwort in Sätzen, wie sie zu dieser Lösung kommen; und erstelle eine Tabelle:

**Antwort**
Wir brauchen mindestens 10 Subnetze, wir müssen die Subnetzmaske entsprechend wählen. 
Für mindestens 12 Hosts pro Subnetz ist /28 geeignet, da sie 14 nutzbare Hosts pro Subnetz bietet.

Netzwerkadresse               nutzbare Hosts                    Broadcastadresse              Subnetzmaske
17.0.0.0	                  .1-.14	                        .15	                    	  /28
17.0.0.16	                  .17-.30	                        .31	                          /28
17.0.0.32	                  .33-.46	                        .47	                          /28
17.0.0.48	                  .49-.62	                        .63	                          /28
17.0.0.64	                  .65-.78	                        .79	                          /28
17.0.0.80                     .81-.94	                        .95	                          /28
17.0.0.96                     .97-.110	                        .111	                      /28
17.0.0.112	                  .113-.126	                        .127	                      /28
17.0.0.128	                  .129-.142	                        .143	                      /28
17.0.0.144	                  .145-.158	                        .159	                      /28
17.0.0.160  	              .161-.174	                        .175	                      /28
17.0.0.176                    .177-.190	                        .191	                      /28
17.0.0.192                    .193-.206	                        .207	                      /28
17.0.0.208                    .209-.222	                        .223	                      /28
17.0.0.224                    .225-.238	                        .239	                      /28
17.0.0.240                    .241-.254	                        .255	                      /28


## Übung 5

Bestimmen Sie die Subnetmaske mit folgenden Angaben:

Netzadresse: 210.52.190.0
Subnetze: Anzahl 5
Mindestanzahl von Hosts je Subnetz: 10

**Antwort**
Ähnlich wie bei Übung 4, nur hier brauchen wir 5 subnets. Also die anderen 11 Subnetze stehen als Reserve zur Verfügung.

Netzwerkadresse               nutzbare Hosts                    Broadcastadresse              Subnetzmaske
210.52.190.0	                  .1-.14	                        .15	                    	  /28
210.52.190.16	                  .17-.30	                        .31	                          /28
210.52.190.32	                  .33-.46	                        .47	                          /28
210.52.190.48	                  .49-.62	                        .63	                          /28
210.52.190.64	                  .65-.78	                        .79	                          /28
210.52.190.80                     .81-.94	                        .95	                          /28
210.52.190.96                     .97-.110	                        .111	                      /28
210.52.190.112	                  .113-.126	                        .127	                      /28
210.52.190.128	                  .129-.142	                        .143	                      /28
210.52.190.144	                  .145-.158	                        .159	                      /28
210.52.190.160  	              .161-.174	                        .175	                      /28
210.52.190.176                    .177-.190	                        .191	                      /28
210.52.190.192                    .193-.206	                        .207	                      /28
210.52.190.208                    .209-.222	                        .223	                      /28
210.52.190.224                    .225-.238	                        .239	                      /28
210.52.190.240                    .241-.254	                        .255	                      /28

## Übung 6

Teile  ein /30 Netz auf!    Wozu werden diese /30 Netze am häufigsten verwendet?
Antwort:

/30 wird für direkte Verbindungen zwischen zwei Netzwerkgeräten verwendet, z.B. Router

**Antwort**
Netzwerkadresse               nutzbare Hosts                    Broadcastadresse              Subnetzmaske
.0	                           .1-.2	                            .3                           /30
.4	                           .5-.6	                            .7                           /30
.8	                           .9-.10	                            .11                          /30
.12	                           .13-.14	                            .15                          /30
.16	                           .17-.18	                            .19                          /30
.20	                           .21-.22	                            .23                          /30
.24	                           .25-.26	                            .27                          /30
.28	                           .29-.30	                            .31                          /30
.32		                       .33-.34	                            .35                          /30
.36	                           .37-.38	                            .39                          /30
.40	                           .41-.42	                            .43                          /30
.44		                       .45-.46	                            .47                          /30
.48		                       .49-.50	                            .51                          /30
.52		                       .53-.54	                            .55                          /30
.56		                       .57-.58	                            .59                          /30
.60		                       .61-.62	                            .63                          /30
.64		                       .65-.66	                            .67                          /30
.68		                       .69-.70	                            .71                          /30
.72		                       .73-.74	                            .75                          /30
.76		                       .77-.78	                            .79                          /30
.80		                       .81-.82	                            .83                          /30
.84		                       .85-.86	                            .87                          /30
.88		                       .89-.90	                            .91                          /30
.92		                       .93-.94	                            .95                          /30
.96		                       .97-.98	                            .99                          /30
.100	                       .101-.102	                        .103                         /30
.104	                       .105-.106	                        .107                         /30
.108	                       .109-.110	                        .111                         /30
.112	                       .113-.114	                        .115                         /30
.116	                       .117-.118	                        .119                         /30
.120	                       .121-.122	                        .123                         /30
.124	                       .125-.126	                        .127                         /30
.128	                       .129-.130	                        .131                         /30
.132	                       .133-.134	                        .135                         /30
.136	                       .137-.138	                        .139                         /30
.140	                       .141-.142	                        .143                         /30
.144	                       .145-.146	                        .147                         /30
.148	                       .149-.150	                        .151                         /30
.152	                       .153-.154	                        .155                         /30
.156	                       .157-.158	                        .159                         /30
.160	                       .161-.162	                        .163                         /30
.164	                       .165-.166	                        .167                         /30
.168	                       .169-.170	                        .171                         /30
.172	                       .173-.174	                        .175                         /30
.176	                       .177-.178	                        .179                         /30
.180	                       .181-.182	                        .183                         /30
.184	                       .185-.186	                        .187                         /30
.188	                       .189-.190	                        .191                         /30
.192	                       .193-.194	                        .195                         /30
.196	                       .197-.198	                        .199                         /30
.200	                       .201-.202	                        .203                         /30
.204	                       .205-.206	                        .207                         /30
.208	                       .209-.210	                        .211                         /30
.212	                       .213-.214	                        .215                         /30
.216	                       .217-.218	                        .219                         /30
.220	                       .221-.222	                        .223                         /30
.224	                       .225-.226	                        .227                         /30
.228	                       .229-.230	                        .231                         /30
.232	                       .233-.234	                        .235                         /30
.236	                       .237-.238	                        .239                         /30
.240	                       .241-.242	                        .243                         /30
.244	                       .245-.246	                        .247                         /30
.248	                       .249-.250	                        .251                         /30
.252	                       .253-.254	                        .255                         /30

## Übung 7

Nennen Sie den jeweiligen Netz- und Hostanteil der Klassen A, B und C

**Antwort**
Klasse	Netzanteil	Hostanteil	Standard-Subnetzmaske
A	    8 Bit	    24 Bit	    255.0.0.0
B	    16 Bit	    16 Bit	    255.255.0.0
C	    24 Bit	    8 Bit	    255.255.255.0






**Mit Hilfe von: Subnetmask cheat sheet, Link: https://www.aelius.com/njh/subnet_sheet.html**