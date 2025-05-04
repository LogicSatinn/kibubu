import { NavFooter } from '@/components/nav-footer';
import { NavMain } from '@/components/nav-main';
import { NavUser } from '@/components/nav-user';
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import type { NavGroup, NavItem } from '@/types';
import { Link } from '@inertiajs/react';
import { BookOpen, CalculatorIcon, Folder, LayoutGrid } from 'lucide-react';
import AppLogo from './app-logo';

const mainNavGroups: NavGroup[] = [
    {
        title: 'Platform',
        items: [
            {
                title: 'Dashboard',
                href: '/dashboard',
                icon: LayoutGrid,
            },
        ],
    },
    {
        title: 'Financial Control',
        items: [
            {
                title: 'Budgets',
                href: '/budgets',
                icon: CalculatorIcon,
            },
            {
                title: 'Piggy Bank',
                href: '/piggy-banks',
                icon: CalculatorIcon,
            },
            {
                title: 'Subscriptions',
                href: '/subscriptions',
                icon: CalculatorIcon,
            },
        ],
    },
    {
        title: 'Accounting',
        items: [
            {
                title: 'Transactions',
                href: '/transactions',
                icon: CalculatorIcon,
            },
        ]
    }
]

const footerNavItems: NavItem[] = [
    {
        title: 'Repository',
        href: 'https://github.com/laravel/react-starter-kit',
        icon: Folder,
    },
    {
        title: 'Documentation',
        href: 'https://laravel.com/docs/starter-kits#react',
        icon: BookOpen,
    },
];

export function AppSidebar() {
    return (
        <Sidebar collapsible="icon" variant="inset">
            <SidebarHeader>
                <SidebarMenu>
                    <SidebarMenuItem>
                        <SidebarMenuButton size="lg" asChild>
                            <Link href="/dashboard" prefetch>
                                <AppLogo />
                            </Link>
                        </SidebarMenuButton>
                    </SidebarMenuItem>
                </SidebarMenu>
            </SidebarHeader>

            <SidebarContent>
                <NavMain groups={mainNavGroups} />
            </SidebarContent>

            <SidebarFooter>
                <NavFooter items={footerNavItems} className="mt-auto" />
                <NavUser />
            </SidebarFooter>
        </Sidebar>
    );
}
