<?php
mb_language('uni');
mb_internal_encoding('UTF-8');
$ents = array(array('nbsp', 160), array('iexcl', 161), array('cent', 162), array('pound', 163), array('curren', 164), array('yen', 165), array('brvbar', 166), array('sect', 167), array('uml', 168), array('copy', 169), array('ordf', 170), array('laquo', 171), array('not', 172), array('shy', 173), array('reg', 174), array('macr', 175), array('deg', 176), array('plusmn', 177), array('sup2', 178), array('sup3', 179), array('acute', 180), array('micro', 181), array('para', 182), array('middot', 183), array('cedil', 184), array('sup1', 185), array('ordm', 186), array('raquo', 187), array('frac14', 188), array('frac12', 189), array('frac34', 190), array('iquest', 191), array('Agrave', 192), array('Aacute', 193), array('Acirc', 194), array('Atilde', 195), array('Auml', 196), array('Aring', 197), array('AElig', 198), array('Ccedil', 199), array('Egrave', 200), array('Eacute', 201), array('Ecirc', 202), array('Euml', 203), array('Igrave', 204), array('Iacute', 205), array('Icirc', 206), array('Iuml', 207), array('ETH', 208), array('Ntilde', 209), array('Ograve', 210), array('Oacute', 211), array('Ocirc', 212), array('Otilde', 213), array('Ouml', 214), array('times', 215), array('Oslash', 216), array('Ugrave', 217), array('Uacute', 218), array('Ucirc', 219), array('Uuml', 220), array('Yacute', 221), array('THORN', 222), array('szlig', 223), array('agrave', 224), array('aacute', 225), array('acirc', 226), array('atilde', 227), array('auml', 228), array('aring', 229), array('aelig', 230), array('ccedil', 231), array('egrave', 232), array('eacute', 233), array('ecirc', 234), array('euml', 235), array('igrave', 236), array('iacute', 237), array('icirc', 238), array('iuml', 239), array('eth', 240), array('ntilde', 241), array('ograve', 242), array('oacute', 243), array('ocirc', 244), array('otilde', 245), array('ouml', 246), array('divide', 247), array('oslash', 248), array('ugrave', 249), array('uacute', 250), array('ucirc', 251), array('uuml', 252), array('yacute', 253), array('thorn', 254), array('yuml', 255), array('fnof', 402), array('Alpha', 913), array('Beta', 914), array('Gamma', 915), array('Delta', 916), array('Epsilon', 917), array('Zeta', 918), array('Eta', 919), array('Theta', 920), array('Iota', 921), array('Kappa', 922), array('Lambda', 923), array('Mu', 924), array('Nu', 925), array('Xi', 926), array('Omicron', 927), array('Pi', 928), array('Rho', 929), array('Sigma', 931), array('Tau', 932), array('Upsilon', 933), array('Phi', 934), array('Chi', 935), array('Psi', 936), array('Omega', 937), array('alpha', 945), array('beta', 946), array('gamma', 947), array('delta', 948), array('epsilon', 949), array('zeta', 950), array('eta', 951), array('theta', 952), array('iota', 953), array('kappa', 954), array('lambda', 955), array('mu', 956), array('nu', 957), array('xi', 958), array('omicron', 959), array('pi', 960), array('rho', 961), array('sigmaf', 962), array('sigma', 963), array('tau', 964), array('upsilon', 965), array('phi', 966), array('chi', 967), array('psi', 968), array('omega', 969), array('thetasym', 977), array('upsih', 978), array('piv', 982), array('bull', 8226), array('hellip', 8230), array('prime', 8242), array('Prime', 8243), array('oline', 8254), array('frasl', 8260), array('weierp', 8472), array('image', 8465), array('real', 8476), array('trade', 8482), array('alefsym', 8501), array('larr', 8592), array('rarr', 8594), array('darr', 8595), array('harr', 8596), array('crarr', 8629), array('lArr', 8656), array('uarr', 8593), array('uArr', 8657), array('rArr', 8658), array('dArr', 8659), array('hArr', 8660), array('forall', 8704), array('part', 8706), array('exist', 8707), array('empty', 8709), array('nabla', 8711), array('isin', 8712), array('notin', 8713), array('ni', 8715), array('prod', 8719), array('sum', 8721), array('minus', 8722), array('lowast', 8727), array('radic', 8730), array('prop', 8733), array('infin', 8734), array('ang', 8736), array('and', 8743), array('or', 8744), array('cap', 8745), array('cup', 8746), array('int', 8747), array('there4', 8756), array('sim', 8764), array('cong', 8773), array('asymp', 8776), array('ne', 8800), array('equiv', 8801), array('le', 8804), array('ge', 8805), array('sub', 8834), array('sup', 8835), array('nsub', 8836), array('sube', 8838), array('supe', 8839), array('oplus', 8853), array('otimes', 8855), array('perp', 8869), array('sdot', 8901), array('lceil', 8968), array('rceil', 8969), array('lfloor', 8970), array('rfloor', 8971), array('lang', 9001), array('rang', 9002), array('loz', 9674), array('spades', 9824), array('clubs', 9827), array('hearts', 9829), array('diams', 9830), array('quot', 34), array('amp', 38), array('lt', 60), array('gt', 62), array('OElig', 338), array('oelig', 339), array('Scaron', 352), array('scaron', 353), array('Yuml', 376), array('circ', 710), array('tilde', 732), array('ensp', 8194), array('emsp', 8195), array('thinsp', 8201), array('zwnj', 8204), array('zwj', 8205), array('ndash', 8211), array('mdash', 8212), array('lsquo', 8216), array('rsquo', 8217), array('sbquo', 8218), array('ldquo', 8220), array('rdquo', 8221), array('bdquo', 8222), array('dagger', 8224), array('Dagger', 8225), array('permil', 8240), array('lsaquo', 8249), array('rsaquo', 8250), array('euro', 8364));

for($i = 0; $i < count($ents); $i++) {

    $name = $ents[$i][1];
    $code = html_entity_decode('&#'.$ents[$i][1].';',ENT_NOQUOTES,'UTF-8');
    $correct = array(
        34 => 50,
        60 => 25,
        62 => 25,
        161 => -35,
        162 => -35,
        166 => -35,
        167 => -35,
        168 => 60,
        170 => 35,
        175 => 90,
        176 => 60,
        178 => 40,
        179 => 40,
        180 => 60,
        181 => -35,
        182 => -35,
        183 => 35,
        185 => 35,
        186 => 35,
        191 => -25,
        199 => -30,
        231 => -20,
        247 => 30,
        253 => -40,
        254 => -40,
        255 => -40,
        402 => -30,
        710 => 80,
        732 => 80,
        946 => -35,
        947 => -30,
        950 => -35,
        951 => -30,
        956 => -30,
        958 => -30,
        961 => -30,
        962 => -30,
        966 => -30,
        967 => -30,
        968 => -30,
        8211 => 50,
        8212 => 50,
        8216 => 50,
        8217 => 50,
        8220 => 50,
        8221 => 50,
        8224 => -30,
        8225 => -30,
        8226 => 50,
        8230 => 40,
        8242 => 50,
        8243 => 50,
        8254 => 80,
        8472 => -30,
        8482 => 30,
        8719 => -20,
        8721 => -20,
        8722 => 50,
        8733 => 30,
        8734 => 20,
        8747 => -30,
        8764 => 50,
        8970 => -30,
        8971 => -30,
        9001 => -30,
        9002 => -30,
    );

    $file = 'fonts/' . $name . '.png';
    $im = imagecreatetruecolor(128, 128);
    $black = imagecolorallocate($im, 0, 0, 0);
    $white = imagecolorallocate($im, 255, 255, 255);
    $font = 'font.ttf';

    imagesavealpha($im, true);
    imagealphablending($im, false);

    $transparent = imageColorAllocateAlpha($im, 255, 255, 255, 127);
    imagefilledrectangle($im, 0, 0, 127, 127, $transparent);
    imagealphablending($im, true);

    $bbox = imagettfbbox(90, 0, $font, $code);

    // This is our cordinates for X and Y
    $x = $bbox[0] + (imagesx($im) / 2) - ($bbox[4] / 2);
    $y = $bbox[1] + (imagesy($im) / 2) - ($bbox[5] / 2) + (isset($correct[$name]) ? $correct[$name] : 0);

    imagettftext($im, 90, 0, $x, $y, $black, $font, $code);
    imagepng($im, $file);
}
die;

