<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head>

  <meta http-equiv="Content-Language" content="en-us">
  <meta name="ProgId" content="FrontPage.Editor.Document">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252"><title>z390 Portable Mainframe Assembler and Emulator</title>
  
  <meta name="DESCRIPTION" content="z390 Protable Mainframe Assembler, Linker, Emulator Open Source J2SE">
  <meta name="KEYWORDS" content="Mainframe Assembler Tools z390 SuperZap Open Source J2SE Java">
  <style>
<!--
li.MsoNormal
{mso-style-parent:"";
margin-bottom:.0001pt;
font-size:12.0pt;
font-family:"Times New Roman";
margin-left:0in; margin-right:0in; margin-top:0in}
-->
  </style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37859694-1']);
  _gaq.push(['_setDomainName', 'z390.org']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>  
  </head><body>

<table style="border-collapse: collapse;" id="AutoNumber1" border="0" cellpadding="0" cellspacing="3" width="810">
  <tbody>
    <tr>
      <td align="center" height="69" valign="top" width="166"><font face="Times New Roman"><span style="background-color: rgb(255, 255, 255);"><b><a href="http://www.z390.org/"><img src="z390.jpg" alt="z390 Portable Mainframe Assembler and Emulator" border="0" height="60" width="100"></a></b></span></font></td>
      <td align="center" height="69" width="458"><p align="center"><b><font size="5">z390 Portable Mainframe Assembler&nbsp;and Emulator
        Project</font></b></p>
      </td>
      <td align="center" height="69" width="174"><b><a href="http://www.zcobol.org/"><img src="zcobol.jpg" alt="zcobol Portable Mainframe COBOL Compiler" border="0" height="75" width="100"></a><br>
        &nbsp;</b></td>
    </tr>
    <tr>
      <td colspan="3" align="left" height="209" valign="top" width="804">
        <table style="border-collapse: collapse;" id="AutoNumber2" border="0" cellpadding="0" cellspacing="0" width="100%">
          <tbody>
            <tr>
              <td align="left" valign="top">
                <table style="border-collapse: collapse;" id="AutoNumber3" border="0" cellpadding="0" cellspacing="0" width="800">
                  <tbody>
                    <tr>
                      <td align="left" height="169" valign="top" width="167"><ul>
                          <li><b><a href="#OVerview">Overview</a></b></li>
                          <li><b><a href="z390_Project_Contributors.htm">Contributors</a></b></li>
                          <li><b><a href="#Download_Links">Download
                            Links</a></b>
                            <ul>
                              <li><b><a href="z390_Download_Archive.htm">Archive</a></b></li>
                              <li><b><a href="z390_Download_History_v1000_v1200g.htm">History
                                1</a></b></li>
                              <li><b><a href="z390_Download_History_v1300_v1500e.htm">History
                                2</a></b></li>
                              <li><b><a href="http://sourceforge.net/project/stats/?group_id=207170&amp;ugn=z390">Statistics</a></b></li>
                            </ul>
                          </li>
                          <li><b><a href="z390_Documentation.htm">Documentation</a></b></li>
                          <li><b><a href="#Reference_Links">References</a></b></li>
                          <li><b><a href="#IBM_Reference_Links">IBM
                            Links</a></b></li>
                          <li><b><a href="http://www.zcobol.org/">zcobol
                            Compiler</a></b></li>
                          <li><b><a href="index.html">zpar Reports</a></b></li>
                          <li><b><a href="index.html">Java Version</a></b></li>
                        </ul>
                      </td>
                      <td align="left" height="169" valign="top" width="660"><p align="center"><b><a href="z390_News.htm">What's New in
                        z390</a></b></p>
                        <ul>
                        <li><strong>02/12/13 -</strong> 
                          <a href="SHARE/SHARE_Presentations.php"><strong>SHARE  Session 12252 Slide Show</strong></a>
                        <li><strong>10/01/12</strong><strong> -</strong>
                            Hosting on sourceforge.net</li>
                          <li><b>05/22/12 - <a href="#Download_Links">z390
                            v1.5.06 Full Release</a></b></li>
                          <li><b>05/22/12 - <a href="zCOBOL_COMPUTE.pdf">z390
                            demo calling zccobol to COMPUTE
                          expression</a></b></li>
                          <li><b>05/17/12 - <a href="z390_Support_Request_Log.htm">Support Request
                            Log RPI's thru 1217</a></b></li>
                          <li><b>03/05/12 - <a href="z390_Options.htm">z390
                            Options - THREAD or NOTHREAD</a></b></li>
                          <li><b>09/29/11 - <a href="http://publibfi.boulder.ibm.com/epubs/pdf/dz9zr008.pdf">z/OS
                            Principles of Operation (V8 with z196 - 35 MB
                            PDF)</a></b></li>
                          <li><b>08/09/11 - <a href="SHARE/SHARE_Presentations.php">z390
                            SHARE Session 9280 Slide Show</a></b></li>
                          <li><b>07/31/11 - <a href="#Download_Links">z390
                            V1.5.05a PTF support for Oracle J2SE
                          1.7.0</a></b></li>
                          <li><b>07/27/11 - <a href="#Download_Links">z390
                            V1.5.05 full release with zCICS V10
                          support</a></b></li>
                          <li><b>05/19/11 - <a href="#Download_Links">z390
                            V1.5.04 full release with z196 extended
                            opcodes</a><a href="z390_Options.htm"></a></b></li>
                          <li><b>12/23/10 - <a href="#Download_Links">z390
                            V1.5.03 full release with z196 support</a></b></li>
                          <li><b>10/27/10 - <a href="#Download_Links">z390
                            V1.5.02 full release with zCICS V9</a></b></li>
                          <li><b>08/06/10 - <a href="z390_popcnt_test.zip">Test
                            version v1.5.01fx1 with POPCNT</a></b></li>
                          <li><b>08/02/10 - <a href="z390_Mainframe_Assemble_Coding_Contest.htm">Assembler
                            Contest Problem #22</a></b></li>
                          <li><b>07/28/10 - <a href="#Download_Links">z390 and
                            zcobol v1.5.01e PTF</a></b></li>
                          <li><b>05/26/10 - <a href="#Download_Links">z390 and
                            zcobol v1.5.01d PTF</a></b></li>
                          <li><b>02/16/10 - <a href="z390_ZSORT_Internal_Sort_Utility.htm">ZSORT
                            internal and file sort utility</a></b></li>
                          <li><b>11/18/09 - <a href="z390_Statemnet_of_Direction.htm">Statement of
                            Direction z390 and zcobol</a></b></li>
                          <li><b>11/05/09 - <a href="GSE_2009_1105_z390_zcobol.pdf">GSE Session
                            z390, zcobol, zCICS by Melvyn M</a></b></li>
                          <li><b>10/08/09 - <a href="http://www.zpar.org/">ZPARTRS COBOL and
                            Assembler source trace</a></b></li>
                          <li><b>09/23/09 - <a href="index.html">z390 webpage
                            to verify pre-requite J2SE 1.6+</a></b></li>
                          <li><b>09/14/09 - <a href="#Download_Links">Full
                            release of z390 and zcobol v1.5.01</a></b></li>
                          <li><b>09/14/09 - <a href="z390_Documentation.htm#zCICS">zCICS V8 new
                            PDF documentation</a></b></li>
                          <li><b>03/03/09 - <a href="SHARE/SHARE_Presentations.php">SHARE
                            Session 8194 on z390/zcobol</a></b></li>
                        </ul>
                      </td>
                      <td align="left" height="169" valign="top" width="157"><ul>
                          <li><b><a href="z390_User_Guide.pdf">User
                            Guide</a></b></li>
                          <li><b><a href="z390_Getting_Started.htm">Get
                            Started</a></b></li>
                          <li><b><a href="z390_Frequently_Asked_Questions.htm">FAQ</a></b></li>
                          <li><b><a href="http://tech.groups.yahoo.com/group/z390/">z390
                            Email</a></b></li>
                          <li><b><a href="http://tech.groups.yahoo.com/group/zcobol/">zcobol
                            Email</a></b></li>
                          <li><b><a href="z390_supportpg.php" title="Support Page">Support</a></b></li>
                          <li><b><a href="z390_Support_Tools.php">Support
                            Tools</a></b></li>
                          <li><b><a href="http://z390-asm.blogspot.com/">z390
                            Blog</a></b></li>
                          <li><b><a href="http://www.automatedsoftwaretools.com/">AST
                            Services</a></b></li>
                          <li><b><a href="http://www.automatedsoftwaretools.com/About.htm">About</a></b></li>
                        </ul>
                      <center><a href="https://plus.google.com/116666987291402113663" rel="publisher"><img src="images/googleplus.png" alt="Google Plus" width="38" height="37" border="0" title="Google Plus"></a></center></td>
                    </tr>
                  </tbody>
                </table>
              </td>
              <td align="left" height="94" valign="top" width="28%"><b></b><br>
</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left" height="1" valign="top" width="804"><br>
</td>
    </tr>
    <tr>
      <td colspan="3" align="left" height="1116" valign="top" width="804"><b><a name="OVerview">Welcome</a> to the z390 portable mainframe macro
        assembler and emulator project web site.<br>
        z390 is a Java <a href="http://java.sun.com/j2se/">J2SE</a> Open Source
        tool with the following major features:</b>
        <ul style="margin-bottom: 0in;" type="disc">
          <ul style="margin-bottom: 0in;" type="circle">
            <li class="MsoNormal" style="font-weight: bold;">Use z390 graphical
              user interface or command line interface </li>
            <li class="MsoNormal"><b>Use simple commands to assemble, link, and
              execute programs </b> 
              <ul style="margin-bottom: 0in;" type="square">
                <li class="MsoNormal" style="font-weight: bold;">Type&nbsp; ASMLG
                  demo\DEMO to assemble and execute demo.mlc</li>
              </ul>
            </li>
            <li class="MsoNormal"><b>z390 program user interfaces include </b> 
              <ul style="margin-bottom: 0in;" type="square">
                <li class="MsoNormal" style="font-weight: bold;">MCS console
                  interface WTO and WTOR </li>
                <li class="MsoNormal"><b>TN3270 full screen interface using:
                  </b> 
                  <ul style="margin-bottom: 0in;" type="square">
                    <li class="MsoNormal" style="font-weight: bold;">TGET and
                      TPUT macro interface</li>
                    <li class="MsoNormal"><a href="index.html" style="color: blue; text-decoration: underline;"><span style="color: windowtext; font-weight: bold;">EXEC
                      CICS</span></a><b>SEND and RECEIVE commands</b></li>
                  </ul>
                </li>
                <li class="MsoNormal" style="font-weight: bold;">Sequential and
                  random file access using EBCDIC or ASCII</li>
              </ul>
            </li>
            <li class="MsoNormal"><b>Macro assembler mz390 is compatible with
              HLASM including: </b> 
              <ul style="margin-bottom: 0in;" type="square">
                <li class="MsoNormal" style="font-weight: bold;">All source code
                  for programs and macros in ASCII</li>
                <li class="MsoNormal" style="font-weight: bold;">Structured
                  macros � IF, ELSEIF, ENDIF, DO, ENDDO</li>
                <li class="MsoNormal"><b>Common OS macros including: </b> 
                  <ul style="margin-bottom: 0in;" type="square">
                    <li class="MsoNormal" style="font-weight: bold;">DCB,&nbsp;OPEN,
                      CLOSE, GET, PUT - sequential </li>
                    <li class="MsoNormal" style="font-weight: bold;">READ,
                      WRITE, CHECK, POINT - random</li>
                    <li class="MsoNormal" style="font-weight: bold;">ACB, RPL,
                      GET, PUT, POINT, MODCB, GENCB, TESTCB - VSAM </li>
                    <li class="MsoNormal" style="font-weight: bold;">GETMAIN,
                      FREEMAIN </li>
                    <li class="MsoNormal" style="font-weight: bold;">WTO, WTOR,
                      WAIT, POST </li>
                    <li class="MsoNormal" style="font-weight: bold;">SPIE, STAE,
                      ABEND, SNAP </li>
                    <li class="MsoNormal" style="font-weight: bold;">STIMER,
                      TTIMER, TIME</li>
                  </ul>
                </li>
                <li class="MsoNormal" style="font-weight: bold;">Pseudo code
                  generation for 3+ times faster processing</li>
                <li class="MsoNormal" style="font-weight: bold;">Pseudo code
                  trace to view all SET and AIF macro variables</li>
              </ul>
            </li>
            <li class="MsoNormal"><b>Linker lz390 supports:</b>
              <ul style="margin-bottom: 0in;" type="circle">
                <li><b>Supports standard OBJ relocatable object files and
                  optional OBJHEX relocatible object file format which is in
                  readable ASCII text with support for 31 bit sections.</b></li>
                <li><b>Builds 390 relocatible load modules with AMODE 24 or 31
                  bit options</b></li>
                <li><b>Optional LKD command files with INCLUDE, ENTRY, ALIAS,
                  and NAME commands</b></li>
                <li><b>Option AUTOLINK for automatic search for external
                  references</b></li>
              </ul>
            </li>
          </ul>
          <ul style="margin-bottom: 0in;" type="circle">
            <li class="MsoNormal"><b>Emulator ez390 supports: </b> 
              <ul style="margin-bottom: 0in;" type="square">
                <li class="MsoNormal"><b>problem state instructions including
                  z9, z10, and <a href="z390_ASSIST_Support.htm">ASSIST</a>
                  opcodes &nbsp;</b></li>
                <li class="MsoNormal" style="font-weight: bold;">32 &amp; 64 bit
                  register instructions</li>
                <li class="MsoNormal" style="font-weight: bold;">24 and 31 bit
                  addressing supporting memory up to host system limit</li>
                <li class="MsoNormal" style="font-weight: bold;">Supports HFP,
                  BFP, and DFP 32, 64, 128 floating point</li>
                <li class="MsoNormal" style="font-weight: bold;">Interactive
                  TEST facility for debugging</li>
                <li class="MsoNormal" style="font-weight: bold;">Extensive TRACE
                  facility for debugging</li>
                <li class="MsoNormal" style="font-weight: bold;">Support for the
                  above MVS compatible macros provided via z390 svc calls</li>
              </ul>
            </li>
            <li class="MsoNormal"><b>z390 is distributed under GNU open source
              license </b> 
              <ul style="margin-bottom: 0in;" type="square">
                <li class="MsoNormal"><b>z390 is written entirely in J2SE
                  compatible portable Java (<a href="z390_Statistics.htm">Statistics</a>)</b></li>
                <li class="MsoNormal"><b>z390 currently regression tested on
                  Windows XP/Vista and <a href="z390_Linux_Support.htm">Linux</a></b></li>
                <li class="MsoNormal"><b>z390 <a href="#Download_Links">downloads</a> include: </b> 
                  <ul style="margin-bottom: 0in;" type="square">
                    <li class="MsoNormal" style="font-weight: bold;">Easy to use
                      InstallShield exe for Windows 2000/XP</li>
                    <li class="MsoNormal" style="font-weight: bold;">File image
                      zip for Linux</li>
                    <li class="MsoNormal" style="font-weight: bold;">PDF
                      documentation</li>
                    <li class="MsoNormal" style="font-weight: bold;">Optional
                      regression test and demo downloads</li>
                  </ul>
                </li>
                <li class="MsoNormal"><b>Join the <a href="http://tech.groups.yahoo.com/group/z390/">z390 project
                  email group</a> for support and development input</b></li>
              </ul>
            </li>
          </ul>
        </ul>

        <p><b><a href="z390_Statemnet_of_Direction.htm">For z390 statement of
        direction, visit here.</a></b></p>

        <p><b>If you are interested in participating in the design,
        development, and support of this project, you are invited to join the
        project email group:&nbsp; <a href="http://groups.yahoo.com/group/z390/">http://groups.yahoo.com/group/z390/</a>
        </b> </p>

        <p><b>For additional information including free sample program assembly
        and conversion estimates contact <a href="mailto:Don@Higgins.net?subject=Sample%20program%20assembly%20and%20conversion%20estimate%20using%20www.z390.org%20tools">Don
        Higgins, President Automated Software Tools.</a></b></p>

        <p><b></b></p>
      </td>
    </tr>
    <tr>
      <td colspan="3" align="left" height="485" valign="top" width="804"><p><b><a name="Download_Links">Download Links</a></b></p>
        <ul>
          <li><b>z390 Downloads</b>
            <ul>
              <li><b>Latest z390 Release Download File Links (Also available
                from <a href="http://sourceforge.net/projects/z390/">z390
                sourceforge project</a> mirrored download servers - click on
                "Downloads", "Browse all files")</b>
                <ul>
                  <li><b><a href="index.html">Verify that J2SE 1.6+ runtime
                    pre-requisite is installed</a></b></li>
                  <li><b>Latest release built using J2SE 1.6.0_26:</b>
                    <ul>
                      <li><b><a href="http://www.sourceforge.net/projects/z390/files/z390_v1506/z390_v1506_setup.zip">z390
                        v1506 setup.zip</a>&nbsp;&nbsp; - InstallShield for z390 full
                        release on Windows</b></li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
            <ul>
              <ul>
                <ul>
                  <li><b><a href="http://www.sourceforge.net/projects/z390/files/z390_v1506/z390_v1506_files.zip">z390
                    v1506 files.zip</a>&nbsp;&nbsp;&nbsp;&nbsp; - Image of installed z390 full
                    release files for Linux&nbsp; </b> 
                    <ul style="margin-left: 80px;">
                      <li><b><a href="z390_Linux_Support.htm">See Linux support
                        here</a> - regression testing on <a href="http://www.ubuntu.com/news/ubuntu-8.04-lts-desktop">Ubuntu
                        10 LTS</a></b></li>
                    </ul>
                  </li>
                  <li><b><a href="http://www.sourceforge.net/projects/z390/files/z390_v1506/z390_v1506_rt.zip">z390_v1506_rt.zip</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    - Optional install files for z390 regression tests</b></li>
                  <li><b><a href="http://www.sourceforge.net/projects/z390/files/z390_v1506/z390_v1506_mvs.zip">z390_v1506
                    mvs.zip</a>&nbsp; - Optional install files for MVS 3.8 maro
                    library</b></li>
                  <li><b><a href="http://www.sourceforge.net/projects/z390/files/z390_v1506/z390_v1506_webdoc.zip">z390_v1506_webdoc</a>&nbsp;
                    - Optional&nbsp; download of <a href="http://www.z390.org/">www.z390.org</a> docs</b></li>
                </ul>
              </ul>
            </ul>
            <ul>
              <li><b><a href="z390_Support.htm">z390 Support</a></b>
                <ul>
                  <li><b><a href="http://www.automatedsoftwaretools.com/z390/z390_Support_Request_Form.htm">z390
                    Support Request Form</a></b></li>
                  <li><b><a href="z390_Support_Request_Log.htm">z390 Pending
                    Support RPI Request Log</a></b></li>
                  <li><b><a href="z390_Download_Archive.htm">z390 Download
                    Archive</a> Recent z390 releases with RPI details</b></li>
                  <li><b><a href="z390_Download_History_v1300_v1500e.htm">z390
                    Download History</a> prior z390 releases with RPI
                    details</b></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><b>z390 Supporting tool downloads</b>
            <ul>
              <li><b><a href="http://java.sun.com/javase/downloads/index.jsp">J2SE
                Downloads</a> - install J2RE Java runtime (z390 tested on
                1.6.0.31, Windows 7, Vista, XP</b>
                <ul>
                  <li><b><a href="http://java.sun.com/javase/6/docs/technotes/tools/windows/java.html">J2SE
                    6.0 Java application launcher options</a></b></li>
                </ul>
              </li>
              <li><b><a href="http://eclipse.org/">Eclipse 3.5 IDE</a>&nbsp;
                recommended tool for Java debugging (Not required to run
                z390)</b></li>
              <li><b><a href="http://www.microsoft.com/windows/default.mspx">Microsoft
                Windowx</a> - z390 InstallShield install tested on Windows
                Vista and XP</b></li>
              <li><b><a href="http://www.ubuntu.com/">Ubuntu Linux</a> - z390
                file image zip install tested on Unbuntu Linux 6.06 LTS (LX)<br>
              </b>          </li>
            </ul>
          </li>
      </ul></td>
    </tr>
    <tr>
      <td colspan="3" align="left" height="2391" valign="top" width="804"><p><b><a name="Reference_Links">Reference
        Links</a></b></p>
        <ul>
          <li><b>Reference Links</b>
            <ul>
              <li><b>Assembler</b>
                <ul>
                  <li><b><a href="http://www.automatedsoftwaretools.com/">Automated
                    Software Tools z390 Portable Mainframe
                  Assembler</a></b></li>
                  <li><b><a href="http://www.automatedsoftwaretools.com/demos/index.html">Automated
                    Software Toold demo programs in HLASM, HAL, C, COBOL, and
                    Java</a></b></li>
                  <li><b><a href="http://www.cbttape.org/">CBTTAPE mainframe
                    assembler source code free downloads and lots of
                    links</a></b>
                    <ul>
                      <li><b><a href="http://cbttape.org/%7Ejmorrison/mvs38j/">MVS 3.8J
                        Public Domain Operating System and Macro
                      Library</a></b></li>
                    </ul>
                  </li>
                  <li><b><a href="http://www.planetmvs.com/hlasm/">David
                    Alcock's unofficial HLASM site</a></b></li>
                  <li><b><font face="Times New Roman"><a href="http://www.dignus.com/dasm/index.html">Dignus
                    Systems/ASM Assembler and Debugger</a></font></b></li>
                </ul>
              </li>
            </ul>
            <ul>
              <ul>
                <li><b><a href="http://www-306.ibm.com/software/awdtools/hlasm/">IBM
                  High Level Assembler and Tool Kit</a></b></li>
                <li><b><a href="http://www.ibm.com/developerworks/websphere/library/techarticles/0801_england/0801_england.html">IBM
                  Eclipse tool for HLASM Debugging</a></b></li>
                <li><b><a href="http://web.tampabay.rr.com/dhiggin1/pc370.htm">PC/370
                  to z390 History</a></b></li>
                <li><b><font face="Times New Roman"><a href="http://www.simotime.com/indexasm.htm">Simotime
                  Assembler Connection with useful information and
                  examples</a></font></b></li>
                <li><b><font face="Times New Roman"><a href="http://tachyonsoft.com/">Tachyon Assembler
                  Workbench</a></font></b></li>
                <li><b><a href="http://www.z390.org/z390_Mainframe_Assemble_Coding_Contest.htm">z390
                  Assembler Coding Contest</a></b></li>
                <li><b><a href="z390_ZSTRMAC_Structured_Macro_Support.htm">ZSTRMAC
                  Structured Programming Extensions (SPE) and Macros
                  (SPM)</a></b></li>
              </ul>
              <li><b><a href="http://publib.boulder.ibm.com/infocenter/zoslnctr/v1r7/index.jsp?topic=/com.ibm.zappldev.doc/zappldev_122.html">Linker/Binder</a></b>
                <ul>
                  <li><b><a href="http://www.cs.niu.edu/%7Errannie/objmodoc.html">Object
                    file format for ESD, TXT, RLD, and END records</a></b></li>
                </ul>
              </li>
              <li><b><a href="http://en.wikipedia.org/wiki/Blog">Blogs</a></b>
                <ul>
                  <li><b><a href="http://z390-asm.blogspot.com/">z390
                    Blog</a></b></li>
                  <li><b><a href="http://www.neonesoft.com/blog/blogs/kharper/">Kristine
                    Harper's Newbie Blog</a></b></li>
                  <li><b><a href="http://blogsearch.google.com/?hl=en&amp;utm_source=AdWords&amp;utm_campaign=us-ha-en-blogsearch&amp;utm_term=blog%20directory&amp;utm_medium=cpc&amp;utm_content=googleblogsearch">Google
                    Blog Search</a></b></li>
                </ul>
              </li>
              <li><b>Education</b>
                <ul>
                  <li><b><a href="http://www.marist.edu/admission/pdfs/factsheet/08%20Fact%20Sheet_SystemZ.pdf">Marist
                    Enterprise Systems Certification</a></b></li>
                  <li><b><a href="http://ce-online.ryerson.ca/ce_2008-2009/program_sites/program_default.asp?id=2603">Ryerson
                    University - Certficate in IBM Mainframe System z
                    Computing</a></b></li>
                  <li><b><a href="http://www.tommysprinkle.com/mvs/P3270/start.htm">TN3270
                    Tutorial</a></b></li>
                  <li><b><a href="http://www.trainersfriend.com/">Trainers
                    Friend - Steve Comstock</a></b></li>
                  <li><b><a href="http://www.arcis-services.net/">z/OS
                    Instructor and Consultant - Michael Castelein</a></b></li>
                </ul>
              </li>
              <li><b>Email Groups</b>
                <ul>
                  <li><b><font face="Times New Roman"><a href="http://groups.yahoo.com/group/z390/">z390 - z390
                    Portable Mainframe Assembler and Emulator User
                    Group</a></font></b></li>
                  <li><b><font face="Times New Roman"><a href="http://www.z390.org/z390_Mainframe_Assemble_Coding_Contest.htm">z390-Assember-Contest
                    - z390 Mainframe Assembler Coding
                  Contest</a></font></b></li>
                  <li><b><font face="Times New Roman"><a href="http://www.lsoft.com/scripts/wl.exe?SL1=ASSEMBLER-LIST&amp;H=LISTSERV.UGA.EDU">ASMLIST
                    - IBM HLL Mainframe Assembler HLASM Users
                    Group</a></font></b></li>
                  <li><b><font face="Times New Roman"><a href="http://groups.yahoo.com/group/hercules-390/">Hercules-390
                    - Hercules Emulator User Group (Yahoogroup)</a></font></b>
                    <ul>
                      <li><b><font face="Times New Roman"><a href="http://www.hercules-390.org/">Hercules</a></font></b></li>
                      <li><b><font face="Times New Roman"><a href="http://www.turbohercules.com/">Turbo
                        Hercules</a></font></b></li>
                    </ul>
                  </li>
                  <li><b><font face="Times New Roman"><a href="http://groups.yahoo.com/group/hercules-s370asm/">H390-ASM370
                    - Hercules MVS 3.8J IFX00 Assembler &amp; Tutorials User
                    Group</a></font></b></li>
                  <li><b><font face="Times New Roman"><a href="http://groups.yahoo.com/group/H390-MVS/">H390-MVS -
                    Hercules MVS 3.8J User Group
                  (Yahoogroup)</a></font></b></li>
                  <li><b><font face="Times New Roman"><a href="http://bama.ua.edu/cgi-bin/wa?SUBED1=ibm-main&amp;A=1">IBM-MAIN
                    - IBM Mainframe Users Group (Email
                  Listserv)</a></font></b></li>
                  <li><b><font face="Times New Roman"><a href="http://groups.yahoo.com/group/turnkey-mvs/">Turnkey-MVS
                    - MVS 3.8J User Group</a></font></b></li>
                </ul>
              </li>
              <li><b><a name="IBM_Reference_Links">IBM Reference Links </a>
                </b> 
                <ul>
                  <li><b><a href="http://publib.boulder.ibm.com/cgi-bin/bookmgr/FINDBOOK?filter=rexx">IBM
                    Catalog Search for Reference Documents</a></b></li>
                  <li><b><a href="http://www.redbooks.ibm.com/">IBM Redbook
                    Library Home Page with search</a></b></li>
                  <li><b><a href="http://www.research.ibm.com/journal/">IBM
                    System Journal</a></b></li>
                  <li><b><a href="http://www-306.ibm.com/software/awdtools/hlasm/library.html#hlasm5">HLASM
                    Assembler</a></b>
                    <ul>
                      <li><b><a href="http://publibz.boulder.ibm.com/epubs/pdf/asmr1020.pdf">High
                        Level Assembler reference</a> (V6 - 2.5 MB)</b></li>
                      <li><b><a href="http://www-03.ibm.com/systems/z/os/zos/bkserv/r10pdf/#hlasm">Additional
                        HLASM Manuals for V6</a></b></li>
                    </ul>
                  </li>
                  <li><b><a href="http://www-03.ibm.com/servers/eserver/zseries/zos/bkserv/zswpdf/zarchpops.html">z/Architecture</a></b>
                    <ul>
                      <li><b><a href="http://www.redbooks.ibm.com/redbooks/SG246366/wwhelp/wwhimpl/java/html/wwhelp.htm">Introduction
                        to z/OS Basics (Redbook) </a></b></li>
                      <li><b><a href="http://www.redbooks.ibm.com/redbooks/SG247124/wwhelp/wwhimpl/java/html/wwhelp.htm">Overview
                        of z9 Processor (Redbook)</a></b></li>
                      <li><b><a href="http://publibfp.boulder.ibm.com/epubs/pdf/dz9zs004.pdf">z/Architecture
                        Reference Summary (V4 with z10 instr.)</a></b></li>
                      <li><b><a href="http://publibfp.boulder.ibm.com/epubs/pdf/dz9zr006.pdf">z/OS
                        Principles of Operation (V6 with z10 instr. - 14 MB PDF
                        with DFP)</a></b></li>
                      <li><b><a href="http://publibfp.boulder.ibm.com/epubs/pdf/dz9zr007.pdf">z/OS
                        Principles of Operation (V7 with z10 PFPO - 31
                        MB)</a></b></li>
                      <li><b><a href="http://publibfi.boulder.ibm.com/epubs/pdf/dz9zr008.pdf">z/OS
                        Principles of Operation (V8 with z196 - 35 MB
                        PDF)</a></b></li>
                      <li><b><a href="http://www.research.ibm.com/journal/rd/531/schwarz.pdf">Decimal
                        Floating Point on the z10 Processor</a></b></li>
                      <li><b><a href="http://publib.boulder.ibm.com/infocenter/zos/v1r9/index.jsp?topic=/com.ibm.zos.r9.iead100/iea2d180593.htm">Content
                        Directory Entries (IHACDE)</a></b></li>
                    </ul>
                  </li>
                  <li><b><a href="http://www-306.ibm.com/software/htp/cics/">CICS</a> -
                    Customer Information Control System</b>
                    <ul>
                      <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/CN7P4000/CCONTENTS?DT=19920626112004">3270
                        Data Stream Programmer's Reference</a></b></li>
                      <li><b><a href="http://publib.boulder.ibm.com/infocenter/cicsts/v3r1/index.jsp?topic=/com.ibm.cics.ts31.doc/dfhp3/dfhp3b0056.htm">Using
                        EXEC CICS</a></b></li>
                      <li><b><a href="http://publibfp.boulder.ibm.com/cgi-bin/bookmgr/BOOKS/dfha4p16/CCONTENTS">CICS
                        Resource Definition Guide</a></b></li>
                    </ul>
                  </li>
                  <li><b><a href="http://www-01.ibm.com/software/awdtools/cobol/">COBOL</a>
                    compilers</b>
                    <ul>
                      <li><b><a href="http://www-949.ibm.com/software/rational/cafe/community/cobol?view=discussions">IBM
                        COBOL Cafe</a></b></li>
                      <li><b><a href="http://www-01.ibm.com/software/awdtools/cobol/zos/library/">IBM
                        Enterprise COBOL</a></b>
                        <ul>
                          <li><b><a href="http://publibfp.boulder.ibm.com/cgi-bin/bookmgr/BOOKS/IGY3LR40/CCONTENTS?DT=20071214160555">Language
                            Reference</a></b></li>
                          <li><b><a href="http://publibfp.boulder.ibm.com/cgi-bin/bookmgr/BOOKS/IGY3PG40/CCONTENTS">Programmers
                            Guide</a></b>
                            <ul>
                              <li><b><a href="http://publibfp.boulder.ibm.com/cgi-bin/bookmgr/BOOKS/IGY3PG40/APPENDIX1.1?DT=20071214180654#HDRWQ10921">Intermediate
                                Results for COMPAT vs EXTEND option</a></b></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><b>&nbsp;<a name="MQ - Message Queue Services">MQ - Message
                    Queue Services</a></b>
                    <ul>
                      <li><b><a href="http://www.redbooks.ibm.com/redbooks/SG246864.html">Websphere
                        MQ Redbook</a></b></li>
                      <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/download/CSQZAL10.pdf?DT=20050520072653">Websphere
                        MQ Services Application Programmer Guide</a></b>
                        <ul>
                          <li><b>See Appendix C for mainframe assembler example
                            calls:</b>
                            <ul>
                              <li><b>MQOPEN - open a message queue by message
                                manager</b></li>
                              <li><b>MQCLOSE - close a message queue by message
                                manager</b></li>
                              <li><b>MQCONN - connect to message queue manager
                                </b> </li>
                              <li><b>MQDISC - disconnect from message queue
                                manager</b></li>
                              <li><b>MQPUT - send message to queue</b></li>
                              <li><b>MQGET - receive message from queue</b></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/download/CSQZAK10.pdf?DT=20050520072711">Websphere
                        MQ Services Application Programmer
                      Reference</a></b></li>
                      <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/download/CSQZAW13.pdf?DT=20050524063921">Websphere
                        MQ Using Java</a></b>
                        <ul>
                          <li><b><a href="http://java.sun.com/products/jms/faq.html#what_is_jms">Sun
                            J2EE JNDI Java Messaging Service FAQ</a></b>
                            <ul>
                              <li><b>Build connection - <a href="http://java.sun.com/j2ee/1.4/docs/api/javax/jms/QueueConnection.html">QueueConnection</a></b></li>
                              <li><b>Build session between two tasks - <a href="http://java.sun.com/j2ee/1.4/docs/api/javax/jms/QueueSession.html">QueueSession</a></b></li>
                              <li><b>Build message generator - <a href="http://java.sun.com/j2ee/1.4/docs/api/javax/jms/QueueSender.html">QueueSender</a></b></li>
                              <li><b>Build message receiver - <a href="http://java.sun.com/j2ee/1.4/docs/api/javax/jms/QueueReceiver.html">QueueReceiver</a></b></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><b>TCP/IP</b>
                    <ul>
                      <li><b><a href="http://www.redbooks.ibm.com/redbooks/GG243376/wwhelp/wwhimpl/java/html/wwhelp.htm">Tutorial
                        on TCP/IP (Redbook)</a></b></li>
                      <li><b><a href="http://www.redbooks.ibm.com/redbooks/SG246321/wwhelp/wwhimpl/java/html/wwhelp.htm">TCP/IP
                        Applications on eSeries</a></b></li>
                    </ul>
                  </li>
                  <li><b><a href="http://www-03.ibm.com/servers/eserver/zseries/zos/">z/OS</a></b>
                    <ul>
                      <li><b><a href="http://www-03.ibm.com/systems/z/">IBM z
                        Systems</a></b></li>
                      <li><b><a href="http://www-03.ibm.com/servers/eserver/zseries/zos/bkserv/r7pdf/mvs.html">z/OS
                        V1R8 Assembler Macro Publications</a></b>
                        <ul>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/IEA2A660/CCONTENTS?DT=20060620153329">z/OS
                            Assembler Services Guide</a></b></li>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/IEA2A770/CCONTENTS?DT=20060619222030">z/OS
                            Assembler Services Reference Vol. 1
                            (ABE-HSP)</a></b></li>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/IEA2A970/CCONTENTS?DT=20060619230153">z/OS
                            Assembler Services Reference Vol. 2
                            (IAR-XCT)</a></b></li>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/IEA2A160/CCONTENTS?DT=20060619201646">z/OS
                            Authorized Assembler Services Vol. 1
                            (ALE-DYN)</a></b></li>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/IEA2A270/CCONTENTS?DT=20060619204210">z/OS
                            Authorized Assembler Services Vol. 2
                            (EDT-IXG)</a></b></li>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/IEA2A370/CCONTENTS?DT=20060724044735">z/OS
                            Authorized Assembler Services Vol. 3
                            (LLA-SDU)</a></b></li>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/IEA2A460/CCONTENTS?DT=20060619215508">z/OS
                            Authorized Assembler Services Vol. 4
                            (SET-WTO)</a></b></li>
                        </ul>
                      </li>
                      <li><b>z/OS V1R8 Access Method Services (BSAM, QSAM,
                        VSAM)</b>
                        <ul>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/DGT2I250/CCONTENTS?DT=20060630014839">z/OS
                            DFSMS AMS for Catalogs</a></b></li>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/DGT2D530/CCONTENTS?DT=20060628224020">z/OS
                            DFSMS Macro Instructions for Data Sets</a></b></li>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/DGT2D450/CCONTENTS?DT=20060524093000">z/OS
                            DFSMS Using Data Sets</a></b></li>
                          <li><b><a href="http://www.redbooks.ibm.com/redbooks/SG246105/wwhelp/wwhimpl/java/html/wwhelp.htm">VSAM
                            Demistified (Redbook)</a></b></li>
                        </ul>
                      </li>
                      <li><b><a href="http://www.redbooks.ibm.com/redbooks/SG246988/wwhelp/wwhimpl/java/html/wwhelp.htm">ABC's
                        of z/OS System Programming</a></b></li>
                    </ul>
                  </li>
                  <li><b><a href="http://www-03.ibm.com/servers/eserver/zseries/zvse/">z/VSE</a></b>
                    <ul>
                      <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/IESSYE10/CCONTENTS?DT=20050111145920">z/VSE
                        3.1 Documentation</a></b>
                        <ul>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/IESMGE10/CCONTENTS?DT=20050111145817">z/VSE
                            System Macro User Guide</a></b></li>
                          <li><b><a href="http://publibz.boulder.ibm.com/cgi-bin/bookmgr_OS390/BOOKS/IESMFE10/CCONTENTS?SHELF=IESVSE54&amp;DN=SC33-8230-00&amp;DT=20050111141219">z/VSE
                            System Macro Reference</a></b></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><b>Organizations</b>
                <ul>
                  <li><b><a href="http://www.gse.org.uk/main_index.html">GSE -
                    Guide Share Europe</a></b>
                    <ul>
                      <li><b><a href="http://www.gse.org.uk/tyc/agenda.html">11/05/09
                        Conference Agenda</a></b></li>
                      <li><b><a href="GSE_2009_1105_z390_zcobol.pdf">11/05/09
                        Session on z390 and zcobol and zCICS by Melvyn
                        Maltz</a></b></li>
                    </ul>
                  </li>
                  <li><b><a href="http://www.opensource.org/index.php">OSI</a>
                    - Open Source Institute</b>
                    <ul>
                      <li><b><a href="http://www.opensource.org/licenses/gpl-license.php">GPL</a>
                        - General Public License</b></li>
                    </ul>
                  </li>
                  <li><b><a href="http://share.org/">SHARE</a></b>
                    <ul>
                      <li><b><a href="http://www.bsp-gmbh.com/turnkey/cookbook/cbtcov.html">CBT
                        Overflow tape - MVS on your PC</a></b></li>
                      <li><b><a href="http://www.cbttape.org/topten.htm">CBT
                        Top Ten Downloads</a></b></li>
                      <li><b><a href="index.html">z390 and zcobol SHARE
                        Presentations</a></b></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><b>&nbsp;</b></li>
              <li><b>Service Oriented Architecture (SOA)</b>
                <ul style="margin-bottom: 0in;" type="disc">
                  <li class="MsoNormal"><b>SOA </b> 
                    <ul style="margin-bottom: 0in;" type="circle">
                      <li class="MsoNormal" style="font-weight: bold;"><a href="z390_SOA_Support.htm">z390 SOA Support</a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://www-128.ibm.com/developerworks/webservices/library/ws-migratesoa/" style="color: blue; text-decoration: underline;">IBM
                        - Migrating to SOA</a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://www.javaworld.com/javaworld/jw-06-2005/jw-0613-soa.html" style="color: blue; text-decoration: underline;">JavaWorld
                        definition of XML based SOA architecture</a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://msdn2.microsoft.com/en-us/architecture/aa948857.aspx" style="color: blue; text-decoration: underline;">Microsoft
                        SOA</a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://www.developer.com/design/article.php/1010451" style="color: blue; text-decoration: underline;">Software
                        Developers Introduction to SOA</a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://java.sun.com/developer/technicalArticles/WebServices/soa/" style="color: blue; text-decoration: underline;">Sun
                        SOA and Web Services</a></li>
                    </ul>
                  </li>
                  <li class="MsoNormal"><b>TCP/IP </b> 
                    <ul style="margin-bottom: 0in;" type="circle">
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://www.faqs.org/rfcs/rfc793.html" style="color: blue; text-decoration: underline;">TCP/IP
                        Transmission Control Protocol RFP</a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://www.cs.rpi.edu/courses/sysprog/sockets/sock.html" style="color: blue; text-decoration: underline;">RPI
                        Sockets Tutorial</a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://java.sun.com/j2se/1.5.0/docs/api/java/net/ServerSocket.html" style="color: blue; text-decoration: underline;">J2SE
                        ServerSocket Class</a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://java.sun.com/j2se/1.5.0/docs/api/java/net/Socket.html" style="color: blue; text-decoration: underline;">J2SE
                        Socket Class</a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://www.redbooks.ibm.com/redbooks/GG243376/wwhelp/wwhimpl/java/html/wwhelp.htm">IBM
                        Tutorial on TCP/IP (Redbook)</a></li>
                    </ul>
                  </li>
                  <li class="MsoNormal"><b>Host IP Addressing </b> 
                    <ul style="margin-bottom: 0in;" type="circle">
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://java.sun.com/j2se/1.5.0/docs/api/java/net/InetAddress.html" style="color: blue; text-decoration: underline;">J2SE
                        InetAddress Class</a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://www.ietf.org/rfc/rfc2373.txt" style="color: blue; text-decoration: underline;">IP
                        Addressing RFC</a></li>
                    </ul>
                  </li>
                  <li class="MsoNormal"><b>Socket Ports </b> 
                    <ul style="margin-bottom: 0in;" type="circle">
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://www.mathworks.com/access/helpdesk/help/toolbox/modelsim/index.html?/access/helpdesk/help/toolbox/modelsim/a1057689278b4.html&amp;http://www.google.com/search?sourceid=navclient&amp;ie=UTF-8&amp;rls=GGLD,GGLD:2003-43,GGLD:en&amp;q=socket+ports" style="color: blue; text-decoration: underline;">Choosing
                        a Socket Port</a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://www.iana.org/assignments/port-numbers" style="color: blue; text-decoration: underline;">Registered
                        Ports </a></li>
                      <li class="MsoNormal" style="font-weight: bold;"><a href="http://www.iana.org/cgi-bin/usr-port-number.pl" style="color: blue; text-decoration: underline;">Register
                        a Port</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><b>Tools</b>
                <ul>
                  <li><b><a href="http://www.eclipse.org/">Eclipse</a>&nbsp; -
                    opensource java source debugger used to debug z390 and
                    zcobol</b></li>
                  <li><b><a href="http://java.sun.com/javase/6/docs/technotes/tools/windows/javac.html#options">J2SE
                    Java </a> </b> 
                    <ul>
                      <li><b><a href="http://java.sun.com/javase/6/docs/index.html">J2SE
                        6 Documentation</a></b>
                        <ul>
                          <li><b><a href="http://java.sun.com/javase/6/docs/api/index.html">J2SE
                            6 Classes</a></b></li>
                          <li><b><a href="http://java.sun.com/javase/6/docs/technotes/tools/windows/javac.html#options">J2SE
                            javac options</a></b></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><b><a href="http://www.migrationportal.com/html/tools.html">Migration
                    Portal</a></b></li>
                  <li><b><a href="http://www.simotime.com/">Simotime</a></b></li>
                  <li><b>z390 Utilities</b>
                    <ul>
                      <li><b><a href="http://www.z390.org/z390_VSAM_Compatible_Assembler_Support.htm">REPRO
                        VSAM File Load and Unload</a></b></li>
                      <li><b><a href="http://www.superzap.net/">SUPERZAP File
                        Search, Dump, and Patch Utility</a></b></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><b><a name="Unicode">Unicode</a></b>
                <ul>
                  <li><b><a href="http://unicode.org/">Consortium</a> </b> </li>
                  <li><b><a href="http://www.iana.org/assignments/character-sets">IANA
                    Character Set Name Registry for Internet</a></b></li>
                  <li><b><a href="http://www-01.ibm.com/software/globalization/topics/unicode/index.jsp">IBM
                    Unicode support</a></b></li>
                  <li><b><a href="http://java.sun.com/developer/technicalArticles/javase/i18n_enhance/">Java
                    Unicode support</a></b>
                    <ul>
                      <li><b>Character Class</b></li>
                      <li><b><a href="http://java.sun.com/javase/6/docs/api/java/nio/charset/Charset.html">Charset
                        Class with encode and decode methods for
                      Unicode</a></b></li>
                      <li><b><a href="http://www.exampledepot.com/egs/java.nio.charset/ShowAll.html?l=rel">List
                        available Unicode to Charset converters</a></b></li>
                    </ul>
                  </li>
                  <li><b><a href="http://www.tachyonsoft.com/txa6.htm">Tachvon
                    Unicode support</a></b></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><b><a name="z390_Documentation" href="z390_Documentation.htm">z390 Documentation</a></b></li>
        </ul>

      </td>
    </tr>
  </tbody>
</table>
<?php include 'footer.php'; ?>
</body></html>