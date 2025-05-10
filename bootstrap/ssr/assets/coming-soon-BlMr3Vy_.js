import { jsx, jsxs } from "react/jsx-runtime";
function ComingSoon() {
  return /* @__PURE__ */ jsx("div", { className: "flex min-h-dvh flex-col items-center justify-center bg-background p-4 text-center", children: /* @__PURE__ */ jsx("main", { className: "container max-w-md space-y-12 py-10", children: /* @__PURE__ */ jsxs("div", { className: "space-y-4", children: [
    /* @__PURE__ */ jsx("h1", { className: "text-4xl font-bold tracking-tighter sm:text-5xl", children: "Coming Soon" }),
    /* @__PURE__ */ jsx("p", { className: "mx-auto max-w-[600px] text-muted-foreground", children: "We're working on something exciting. Stay tuned for our launch." })
  ] }) }) });
}
export {
  ComingSoon as C
};
