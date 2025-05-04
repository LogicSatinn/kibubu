import { SidebarGroup, SidebarGroupLabel, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import type { NavGroup } from '@/types';
import { Link, usePage } from '@inertiajs/react';

export function NavMain({ groups = [] }: { groups: NavGroup[] }) {
    const page = usePage();
    return (
        <>
            {groups.map(group => (
                <SidebarGroup key={group.title} className="px-2 py-0">
                    <SidebarGroupLabel>{group.title}</SidebarGroupLabel>
                    <SidebarMenu>
                        {group.items.map((item) => (
                            <SidebarMenuItem key={item.title}>
                                <SidebarMenuButton
                                    asChild isActive={item.href === page.url}
                                    tooltip={{ children: item.title }}
                                >
                                    <Link href={item.href} prefetch>
                                        {item.icon && <item.icon />}
                                        <span>{item.title}</span>
                                    </Link>
                                </SidebarMenuButton>
                            </SidebarMenuItem>
                        ))}
                    </SidebarMenu>
                </SidebarGroup>
            ))}
        </>
    );
}
