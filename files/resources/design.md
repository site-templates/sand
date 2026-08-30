# Sand — design system

## Atmosphere
One sheet of off-white paper, held to a narrow column, with two textures
fading in at the corner the reading column leaves empty — top-right of every
page, bottom-left of the closing block. A **dot-paper grid** drawn in CSS
(never photographed, so it stays one pixel crisp at any density and costs
nothing to download) sits over a **pale sand watercolour** at `opacity-45`,
roughly half the strength the paint first carried: on a page this light,
anything stronger stops reading as light and starts reading as a stain. The
dot grid also thins across the Now band, where the wash does not go. Both are
masked off the reading column, and each has its own toggle. Nothing is
boxed. Sibling content is separated by hairlines and whitespace,
never by cards. The site is really one interaction repeated — a list row you
want to hover — and everything else gets out of its way.

## Colors
| Token | Hex | Role |
|---|---|---|
| canvas | `#FBFAF7` | off-white paper, the page ground |
| surface | `#FFFFFF` | the pointer preview card, the mobile menu |
| raised | `#F3F1EB` | the Now band, code, inset wells |
| ink | `#141310` | primary text and every filled surface |
| muted | `#6C665C` | secondary text, descriptions, meta |
| faint | `#A8A296` | decorative only — the prose list marker, nothing else |
| line | `#E8E3D8` | hairlines and dividers |
| accent | `#8A5A34` | warm clay — link hover, the live dot, focus rings |
| accent-ink | `#FFFDF9` | text on accent |
| dot | `#DFD9CB` | the dot-paper grid |

The two washes are the only photographs in the chrome; everything else is drawn.
| code-ink | `#EDE9E1` | the one light that reads on a code block |

**Every filled surface is ink, never accent.** The accent is a spice: it
appears on hover, on the availability dot, and on focus rings, and nowhere
else. `faint` never carries text of any kind — it does not clear AA at any size, and
its only job in the template is the prose list marker. Dates, kinds, captions,
and the copyright line are all `muted`, which clears AA at 5.4:1.
The palette is black, off-white, and tan, and the paper supplies the tan.
Nothing outside this block names a colour — the frosted header is a
`color-mix` of `canvas`, so retuning the paper retunes it too.

## Typography
- Display: **Schibsted Grotesk** — h1, section headings, row titles, the
  wordmark. `font-semibold` at 600; never bolder.
- Text: **Inter** — body, UI, descriptions.
- Meta: **JetBrains Mono** at 400 — dates, years, read times, counts, and
  nothing else. It is a measurement voice, not a technical costume, and it is
  never used for an eyebrow or a section label.
- Hero: `clamp(2.375rem, 5.5vw, 3.5rem)` / 1.05 / -0.035em.
- Body: `text-base` in UI, `text-lg` in prose. Prose measure caps at 68ch,
  intro copy at 52ch.

## Spacing & radius
Everything sits in `max-w-3xl` with `px-6`, and the header and footer share
that column so the bar lines up with the headline beneath it. Sections are
`py-16` on mobile, `py-20`/`py-24` on desktop — the rhythm is the same on
every page. The Now band is the one element that breaks the column: it is
full-bleed with hairlines top and bottom, its contents still on the column.
Radii are small and consistent — `rounded-xl` for the preview card and the
mobile menu, `rounded-full` for the one pill, `min(1vw,10px)` for images.

## Components
The header carries the name and the links and nothing else — the avatar
appears once, in the homepage hero, and is never repeated in the bar. The bar
is bare at the top of the page and frosts once content slides beneath it.

**Every row on the site reads the same way: the thing you came for on the
left, its meta right-aligned opposite.** Writing, projects, the timeline, and
the Now log all share that grammar — no left gutter, no indented titles.
There are no cards: writing and project rows are hairline-separated
`<a>` elements whose title steps 6px right on hover while a small marker fades
in beside it — colour swaps instantly, only the travel is transitioned.

The signature is the **pointer preview**: hovering a writing or project row
fades in a small card that tracks the pointer with a slight lag, showing the
project's thumbnail or the post's opening line. It is a fine-pointer,
motion-welcome enhancement only; touch and reduced-motion visitors get the row
hover alone and lose nothing.

## Voice
First person, present tense, short declaratives. Name the constraint and the
outcome. Sentence case everywhere. Periods on standalone sentences, none on
list items. No exclamation marks, no "powerful", "seamless", or "solutions",
no em-dash-joined superlatives.

## Anti-patterns
No eyebrow or kicker above a heading. No section numbering. No cards, and
never cards inside cards. No gradient text. No emoji standing in for icons. No
accent-filled buttons. No monospace outside dates and counts. No hover state
on anything that is not a link.

## Tokens
```css
@theme {
    --color-canvas: #FBFAF7;
    --color-surface: #FFFFFF;
    --color-raised: #F3F1EB;
    --color-ink: #141310;
    --color-muted: #6C665C;
    --color-faint: #A8A296;
    --color-line: #E8E3D8;
    --color-accent: #8A5A34;
    --color-accent-ink: #FFFDF9;
    --color-dot: #DFD9CB;
    --color-code-ink: #EDE9E1;

    --font-display: "Schibsted Grotesk", ui-sans-serif, system-ui, sans-serif;
    --font-sans: "Inter", ui-sans-serif, system-ui, sans-serif;
    --font-mono: "JetBrains Mono", ui-monospace, SFMono-Regular, monospace;
}
```
