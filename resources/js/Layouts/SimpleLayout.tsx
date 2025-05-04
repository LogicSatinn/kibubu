import type React from "react";

export default function SimpleLayout({
    children,
}: {
    children: React.ReactNode
}) {
    return (
        <html lang="en">
            <body className="font-sans antialiased min-h-screen">
                {children}
            </body>
        </html>
    )
}
