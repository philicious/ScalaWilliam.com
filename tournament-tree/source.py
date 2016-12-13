import requests
import lxml
from lxml import html

"""
https://github.com/ScalaWilliam/scala-game-tournament/blob/master/src/main/scala/sw/TournamentTree.scala#L5-L13
becomes
https://raw.githubusercontent.com/ScalaWilliam/scala-game-tournament/master/src/main/scala/sw/TournamentTree.scala
"""

def transformed(inlink):
    return inlink.split("#")[0].replace("github.com", "raw.githubusercontent.com").replace("blob/","")
def line_numbers(inlink):
    return tuple(map(lambda x: int(x[1:]), inlink.split("#")[1].split("-")))
def lstripped(lines):
    shift = min(
        [ len(line) - len(line.lstrip()) if len(line) != 0 else 999 for line in lines]
    )
    for line in lines:
        if len(line) == 0:
            yield line
        else:
            yield line[shift:]

h = html.parse("index.html")
for item in h.xpath("//section[pre[code]]/p/a[@class='source']"):
    for (el, _, link, _) in item.iterlinks():
        (line_from, line_to) = line_numbers(link)
        transf = transformed(link)
        for code in item.getparent().getparent().xpath("pre/code[1]"):
            lines = requests.get(transf).content.split("\n")[(line_from - 1):line_to]
            code.text = "\n".join(lstripped(lines))
        # requests.get.content
        # print link, transformed(link), lines(link)
outString = html.tostring(h, method = 'html')
with open('index.html', 'w') as f:
    f.write(outString)
