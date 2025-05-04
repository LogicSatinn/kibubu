import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Dialog, DialogContent, DialogDescription, DialogHeader, DialogTitle, DialogTrigger } from "@/components/ui/dialog";
import { Table, TableCaption, TableHeader, TableRow, TableHead, TableBody, TableCell } from "@/components/ui/table";
import AppLayout from "@/layouts/app-layout";
import type { BreadcrumbItem } from "@/types";
import { Head } from "@inertiajs/react";
import { PlusIcon } from "lucide-react";

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard'
    },
    {
        title: 'Accounts',
        href: '/accounts'
    }
];

export default function Accounts({ categories }: { categories: App.Data.AccountCategory[] }) {
    console.log(categories);

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Accounts" />

            <section className="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
                {categories.map(category => (
                    <Card key={category.ulid}>
                        <CardHeader className="flex flex-row items-center justify-between">
                            <div>
                                <CardTitle>
                                    {category.name}
                                </CardTitle>
                                <CardDescription>
                                    Manage accounts in {category.name}.
                                </CardDescription>
                            </div>

                            <Dialog key={category.ulid}>
                                <DialogTrigger asChild>
                                    <Button variant="default">
                                        <PlusIcon className="size-4" />
                                        Add Account
                                    </Button>
                                </DialogTrigger>
                                <DialogContent>
                                    <DialogHeader>
                                        <DialogTitle className="leading-4 tracking-tight">
                                            New Account
                                        </DialogTitle>
                                        <DialogDescription>
                                            Add an account to {category.name}.
                                        </DialogDescription>
                                    </DialogHeader>
                                </DialogContent>
                            </Dialog>
                        </CardHeader>
                        <CardContent className="">
                            <div className="px-0 pb-4 border border-zinc-200 rounded-lg shadow-xs overflow-hidden dark:border-zinc-800 dark:shadow-zinc-900">
                                <Table className="min-w-full">
                                    <TableCaption>A list of your accounts in {category.name}.</TableCaption>
                                    <TableHeader className="bg-zinc-50 dark:bg-zinc-900">
                                        <TableRow>
                                            <TableHead className="px-6 py-3 text-start text-xs font-medium text-zinc-500 uppercase dark:text-zinc-400">Name</TableHead>
                                            <TableHead className="px-6 py-3 text-start text-xs font-medium text-zinc-500 uppercase dark:text-zinc-400">Balance</TableHead>
                                        </TableRow>
                                    </TableHeader>
                                    <TableBody>
                                        {category.accounts.map(account => (
                                            <TableRow key={account.ulid}>
                                                <TableCell className="px-6 py-3 text-start text-xs font-medium text-zinc-700 dark:text-zinc-400">{account.name}</TableCell>
                                                <TableCell className="px-6 py-3 text-start text-xs font-medium text-zinc-700 dark:text-zinc-400">{account.balance}</TableCell>
                                            </TableRow>
                                        ))}
                                    </TableBody>
                                </Table>
                            </div>
                        </CardContent>
                    </Card>
                ))}
            </section>
        </AppLayout>
    );
}
