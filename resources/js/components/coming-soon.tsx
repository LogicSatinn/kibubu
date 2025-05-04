export default function ComingSoon() {
    return (
        <div className="flex min-h-dvh flex-col items-center justify-center bg-background p-4 text-center">
            <main className="container max-w-md space-y-12 py-10">
                <div className="space-y-4">
                    <h1 className="text-4xl font-bold tracking-tighter sm:text-5xl">Coming Soon</h1>
                    <p className="mx-auto max-w-[600px] text-muted-foreground">
                        We're working on something exciting. Stay tuned for our launch.
                    </p>
                </div>
            </main>
        </div>
    );
}
